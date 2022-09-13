import { Table } from "@mantine/core";
import Head from "next/head";
import { useRouter } from "next/router";
import { ReactElement, useEffect, useState } from "react";
import MainLayout from "../../components/layout";
import api from "../../services/api";
import { EquipeJogadoresAPI } from "../../types/equipe";

export default function TeamPage() {
  const router = useRouter();
  const { id } = router.query;
  const [equipe, setEquipe] = useState<EquipeJogadoresAPI | null>(null);

  useEffect(() => {
    api.get<EquipeJogadoresAPI>(`/api/v1/equipes/${id}`).then((res) => {
      setEquipe(res.data);
    });
  }, [id]);

  const rows = equipe?.jogadores.map((line) => (
    <tr key={line.id}>
      <td>{line.nome}</td>
      <td>{line.posicao}</td>
      <td>{line.numero_camisa}</td>
      <td>{line.pais}</td>
    </tr>
  ));

  return (
    <>
      <Head>
        <title>Equipe - Jogadores</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />
      </Head>
      <Table striped highlightOnHover>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Posição</th>
            <th>Numero Camisa</th>
            <th>Pais</th>
          </tr>
        </thead>
        <tbody>{rows}</tbody>
      </Table>
    </>
  );
}

TeamPage.getLayout = (page: ReactElement) => <MainLayout>{page}</MainLayout>;
