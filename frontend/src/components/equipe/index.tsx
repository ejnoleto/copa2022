import { Box, Card, Image, Text } from "@mantine/core";
import Link from "next/link";

type EquipeCardProps = {
  id: number;
  pais: string;
  codigo: string;
};

export default function EquipeCard({ id, pais, codigo }: EquipeCardProps) {
  const image = `https://countryflagsapi.com/png/${codigo}`;
  return (
    <Link href={`/equipe/${id}`} passHref>
      <Card
        component="a"
        shadow="sm"
        p="sm"
        radius="md"
        withBorder
        style={{ maxWidth: 150 }}
      >
        <Card.Section style={{ display: "flex", alignItems: "center" }}>
          <Image
            src={image}
            width={150}
            height={150}
            alt={pais}
            withPlaceholder
          />
        </Card.Section>
        <Box mt="sm" style={{ textAlign: "center" }}>
          <Text>{pais}</Text>
          <Text>{codigo}</Text>
        </Box>
      </Card>
    </Link>
  );
}
