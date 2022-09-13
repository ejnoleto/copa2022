import { Group } from "@mantine/core";
import { useMediaQuery } from "@mantine/hooks";
import Head from "next/head";
import { ReactElement, useEffect, useState } from "react";
import MainLayout from "../../components/layout";
import TeamCard from "../../components/equipe";
import api from "../../services/api";
import { EquipeAPI } from "../../types/equipe";

export default function EquipePagina() {
  const [equipes, setEquipes] = useState<EquipeAPI | []>([]);
  const mediaQuery = useMediaQuery("(min-width: 900px)");

  useEffect(() => {
    api.get<EquipeAPI>("/api/v1/equipes").then((res) => {
      setEquipes(res.data);
    });
  }, []);

  return (
    <>
      <Head>
        <title>Equipes</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />
      </Head>
      <Group position={mediaQuery ? "left" : "apart"}>
        {equipes.map((item, index) => (
          <TeamCard
            key={index}
            id={item.id}
            pais={item.pais}
            codigo={item.codigo}
          />
        ))}
      </Group>
    </>
  );
}

EquipePagina.getLayout = (page: ReactElement) => (
  <MainLayout>{page}</MainLayout>
);
