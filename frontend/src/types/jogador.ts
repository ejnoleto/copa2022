import { Equipe } from "./equipe";

export type Jogador = {
  id: number;
  nome: string;
  nascimento: string;
  posicao: string;
  numero_camisa: number;
  capitao: boolean;
  pais: string;
  equipe: Equipe;
};
