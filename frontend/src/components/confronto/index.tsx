import { Avatar, Group, Text } from "@mantine/core";

type ConfrontoItemProps = {
  equipe_casa: {
    pais: string;
    codigo: string;
  };
  equipe_visitante: {
    pais: string;
    codigo: string;
  };
};

export default function ConfrontoItem({
  equipe_casa,
  equipe_visitante,
}: ConfrontoItemProps) {
  return (
    <Group position="center" style={{ maxWidth: "300px" }}>
      <Avatar
        size="lg"
        radius="xl"
        src={`https://countryflagsapi.com/png/${equipe_casa.codigo}`}
        alt={equipe_casa.pais}
      >
        {equipe_casa.codigo}
      </Avatar>
      <Text>{equipe_casa.codigo}</Text>
      <Avatar color="cyan" radius="xl">
        VS
      </Avatar>
      <Text>{equipe_visitante.codigo}</Text>
      <Avatar
        size="lg"
        radius="xl"
        src={`https://countryflagsapi.com/png/${equipe_visitante.codigo}`}
        alt={equipe_visitante.pais}
      >
        {equipe_visitante.codigo}
      </Avatar>
    </Group>
  );
}
