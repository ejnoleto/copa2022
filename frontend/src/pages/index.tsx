import {
  Button,
  Container,
  createStyles,
  Group,
  Image,
  List,
  Text,
  ThemeIcon,
  Title,
} from "@mantine/core";
import { IconCheck } from "@tabler/icons";
import Link from "next/link";
import { ReactElement } from "react";
import MainLayout from "../components/layout";

const useStyles = createStyles((theme) => ({
  inner: {
    display: "flex",
    justifyContent: "space-between",
    paddingTop: theme.spacing.xl * 4,
    paddingBottom: theme.spacing.xl * 4,
  },

  content: {
    maxWidth: 480,
    marginRight: theme.spacing.xl * 3,

    [theme.fn.smallerThan("md")]: {
      maxWidth: "100%",
      marginRight: 0,
    },
  },

  title: {
    color: theme.colorScheme === "dark" ? theme.white : theme.black,
    fontFamily: `Greycliff CF, ${theme.fontFamily}`,
    fontSize: 44,
    lineHeight: 1.2,
    fontWeight: 900,

    [theme.fn.smallerThan("xs")]: {
      fontSize: 28,
    },
  },

  control: {
    [theme.fn.smallerThan("xs")]: {
      flex: 1,
    },
  },

  image: {
    flex: 1,

    [theme.fn.smallerThan("md")]: {
      display: "none",
    },
  },

  highlight: {
    position: "relative",
    backgroundColor: theme.fn.variant({
      variant: "light",
      color: theme.primaryColor,
    }).background,
    borderRadius: theme.radius.sm,
    padding: "4px 12px",
  },
}));

export default function Home() {
  const { classes } = useStyles();
  return (
    <Container>
      <div className={classes.inner}>
        <div className={classes.content}>
          <Title className={classes.title}>
            Um sistema <span className={classes.highlight}>moderno</span>
            <br />
            para acompanhar seu time favorito
          </Title>
          <Text color="dimmed" mt="md">
            aplicativos Web acessível mais rápido do que nunca, para cobrir
            todos os eventos em qualquer situação
          </Text>

          <List
            mt={30}
            spacing="sm"
            size="sm"
            icon={
              <ThemeIcon size={20} radius="xl">
                <IconCheck size={12} stroke={1.5} />
              </ThemeIcon>
            }
          >
            <List.Item>
              <b>Escrito em TypeScript</b> - O TypeScript é um superconjunto de
              JavaScript.
            </List.Item>
            <List.Item>
              <b>Utilizando NextJS</b> - O NextJS é um framework React para
              produção.
            </List.Item>
            <List.Item>
              <b>Com Backend Laravel</b> - O Laravel é um framework PHP para
              produção.
            </List.Item>
          </List>

          <Group mt={30}>
            <Link href="/equipe" passHref>
              <Button
                component="a"
                radius="xl"
                size="md"
                className={classes.control}
              >
                Iniciar
              </Button>
            </Link>
            <Link href="https://github.com/ejnoleto/copa" passHref>
              <Button
                component="a"
                variant="default"
                radius="xl"
                size="md"
                className={classes.control}
              >
                Código fonte
              </Button>
            </Link>
          </Group>
        </div>
        <Image
          src="/game_day.svg"
          className={classes.image}
          alt="Dia de jogo"
        />
      </div>
    </Container>
  );
}

Home.getLayout = (page: ReactElement) => <MainLayout>{page}</MainLayout>;
