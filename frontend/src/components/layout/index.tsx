import {
  ActionIcon,
  AppShell,
  Burger,
  Group,
  Header,
  MediaQuery,
  Navbar,
  Text,
  useMantineColorScheme,
  useMantineTheme,
} from "@mantine/core";
import { IconMoonStars, IconSun } from "@tabler/icons";
import Link from "next/link";
import { ReactNode, useState } from "react";
import { NavLinks } from "./_navlinks";

export default function MainLayout({ children }: { children: ReactNode }) {
  const theme = useMantineTheme();
  const { colorScheme, toggleColorScheme } = useMantineColorScheme();
  const [opened, setOpened] = useState(false);
  return (
    <AppShell
      styles={{
        main: {
          background:
            theme.colorScheme === "dark"
              ? theme.colors.dark[8]
              : theme.colors.gray[0],
        },
      }}
      navbarOffsetBreakpoint="sm"
      asideOffsetBreakpoint="sm"
      navbar={
        <Navbar
          p="md"
          hiddenBreakpoint="sm"
          hidden={!opened}
          width={{ sm: 200, lg: 250 }}
        >
          <NavLinks />
        </Navbar>
      }
      header={
        <Header height={70} p="md">
          <div
            style={{ display: "flex", alignItems: "center", height: "100%" }}
          >
            <Group
              sx={{ height: "100%" }}
              px={20}
              position="apart"
              style={{ width: "100%" }}
            >
              <MediaQuery largerThan="sm" styles={{ display: "none" }}>
                <Burger
                  opened={opened}
                  onClick={() => setOpened((o) => !o)}
                  size="sm"
                  color={theme.colors.gray[6]}
                />
              </MediaQuery>
              <Link href="/" passHref>
                <Text component="a">Copa 2022</Text>
              </Link>
              <ActionIcon
                variant="default"
                onClick={() => toggleColorScheme()}
                size={30}
              >
                {colorScheme === "dark" ? (
                  <IconSun size={16} />
                ) : (
                  <IconMoonStars size={16} />
                )}
              </ActionIcon>
            </Group>
          </div>
        </Header>
      }
    >
      {children}
    </AppShell>
  );
}
