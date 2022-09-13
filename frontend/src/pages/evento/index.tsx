import { Table } from "@mantine/core";
import Head from "next/head";
import { ReactElement, useEffect, useState } from "react";
import MainLayout from "../../components/layout";
import api from "../../services/api";
import { LogEventosAPI } from "../../types/evento";

export default function EventoPagina() {
  const [logEventos, setLogEventos] = useState<LogEventosAPI | []>([]);

  useEffect(() => {
    api.get<LogEventosAPI>("/api/v1/eventos").then((res) => {
      setLogEventos(res.data);
    });
  }, []);

  const rows = logEventos.map((line) => (
    <tr key={line.id}>
      <td>{line.tipo}</td>
      <td>{line.tempo}</td>
      <td>{line.jogador?.nome}</td>
      <td>{line.equipe?.pais}</td>
      <td>{line.confronto?.local}</td>
    </tr>
  ));

  return (
    <>
      <Head>
        <title>Histórico</title>
        <meta name="viewport" content="initial-scale=1.0, width=device-width" />
      </Head>
      <Table striped highlightOnHover>
        <thead>
          <tr>
            <th>Tipo de Evento</th>
            <th>Tempo</th>
            <th>Jogador</th>
            <th>Time</th>
            <th>Local</th>
          </tr>
        </thead>
        <tbody>{rows}</tbody>
      </Table>
    </>
  );
}

EventoPagina.getLayout = (page: ReactElement) => (
  <MainLayout>{page}</MainLayout>
);
