import { Jogador } from "./jogador";

export type Equipe = {
  id: number;
  pais: string;
  nome_alternativo: string;
  codigo: string;
  grupo_id: number;
  grupo_sigla: string;
};

export type EquipeAPI = [Equipe];

export type EquipeJogadoresAPI = Equipe & { jogadores: Jogador[] };
