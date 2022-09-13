import { Confronto } from "./confronto";
import { Equipe } from "./equipe";
import { Jogador } from "./jogador";

export type LogEventos = {
  id: number;
  tipo: string;
  tempo: string;
  jogador: Jogador;
  equipe: Equipe;
  confronto: Pick<Confronto, "id" | "local">;
};

export type LogEventosAPI = [LogEventos];
