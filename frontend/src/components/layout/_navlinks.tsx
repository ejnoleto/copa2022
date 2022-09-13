import { Group, Text, ThemeIcon, UnstyledButton } from "@mantine/core";
import { IconHistory, IconShirt, IconSoccerField } from "@tabler/icons";
import Link from "next/link";
import React from "react";

interface NavLinkProps {
  icon: React.ReactNode;
  color: string;
  label: string;
  path: string;
}

function NavLink({ icon, color, label, path }: NavLinkProps) {
  return (
    <Link href={path} passHref>
      <UnstyledButton
        component="a"
        sx={(theme) => ({
          display: "block",
          width: "100%",
          padding: theme.spacing.xs,
          borderRadius: theme.radius.sm,
          color:
            theme.colorScheme === "dark" ? theme.colors.dark[0] : theme.black,

          "&:hover": {
            backgroundColor:
              theme.colorScheme === "dark"
                ? theme.colors.dark[6]
                : theme.colors.gray[0],
          },
        })}
      >
        <Group>
          <ThemeIcon color={color} variant="light">
            {icon}
          </ThemeIcon>

          <Text size="sm">{label}</Text>
        </Group>
      </UnstyledButton>
    </Link>
  );
}

const data = [
  {
    icon: <IconShirt size={16} />,
    color: "teal",
    label: "Equipes",
    path: "/equipe",
  },
  {
    icon: <IconSoccerField size={16} />,
    color: "blue",
    label: "Confrontos",
    path: "/confronto",
  },
  {
    icon: <IconHistory size={16} />,
    color: "grape",
    label: "Eventos",
    path: "/evento",
  },
];

export function NavLinks() {
  const links = data.map((link) => <NavLink {...link} key={link.label} />);
  return <div>{links}</div>;
}
