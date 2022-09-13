import { Table } from "@mantine/core";
import Head from "next/head";
import { ReactElement, useEffect, useState } from "react";
import ConfrontoItem from "../../components/confronto";
import MainLayout from "../../components/layout";
import api from "../../services/api";
import { ConfrontoAPI } from "../../types/confronto";

export default function ConfrontoPagina() {
  const [confrontos, setConfrontos] = useState<ConfrontoAPI | []>([]);

  useEffect(() => {
    api.get<ConfrontoAPI>("/api/v1/confrontos").then((res) => {
      setConfrontos(res.data);
    });
  }, []);

  const rows = confrontos.map((confronto) => (
    <tr key={confronto.id}>
      <td>
        <ConfrontoItem
          equipe_casa={confronto.equipe_casa}
          equipe_visitante={confronto.equipe_visitante}
        />
      </td>
      <td>{confronto.local}</td>
      <td>{confronto.vencedor?.pais}</td>
      <td>
        {confronto.vencedor
          ? `${confronto.gols_casa} X ${confronto.gols_visitante}`
          : ""}
      </td>
      <td>
        {Intl.DateTimeFormat("pt-BR", {
          dateStyle: "short",
          timeStyle: "short",
        }).format(new Date(confronto.data))}
      </td>
    </tr>
  ));
  return (
    <>
      <Head>
        <title>Confrontos</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />
      </Head>
      <Table striped highlightOnHover>
        <thead>
          <tr>
            <th style={{ width: "400px" }}>Confronto</th>
            <th>Local</th>
            <th>Vencendor</th>
            <th>Placar</th>
            <th>Data</th>
          </tr>
        </thead>
        <tbody>{rows}</tbody>
      </Table>
    </>
  );
}

ConfrontoPagina.getLayout = (page: ReactElement) => (
  <MainLayout>{page}</MainLayout>
);
