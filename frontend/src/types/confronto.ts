import { Equipe } from "./equipe";

export type Confronto = {
  id: number;
  local: string;
  status: string;
  data: string;
  equipe_casa: Equipe;
  equipe_visitante: Equipe;
  gols_casa: number;
  gols_visitante: number;
  vencedor: Equipe;
};

export type ConfrontoAPI = [Confronto];
