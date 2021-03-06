INSERT INTO modules.tabela_arredondamento
  (instituicao_id, nome, tipo_nota)
  VALUES
  (1, 'Numérica com intervalo de 0.1', 1);

INSERT INTO modules.tabela_arredondamento_valor
  (tabela_arredondamento_id, nome, valor_minimo, valor_maximo)
  VALUES
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '0.0', 0.000, 0.099),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '0.1', 0.100, 0.199),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '0.2', 0.200, 0.299),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '0.3', 0.300, 0.399),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '0.4', 0.400, 0.499),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '0.5', 0.500, 0.599),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '0.6', 0.600, 0.699),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '0.7', 0.700, 0.799),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '0.8', 0.800, 0.899),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '0.9', 0.900, 0.999),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '1.0', 1.000, 1.099),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '1.1', 1.100, 1.199),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '1.2', 1.200, 1.299),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '1.3', 1.300, 1.399),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '1.4', 1.400, 1.499),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '1.5', 1.500, 1.599),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '1.6', 1.600, 1.699),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '1.7', 1.700, 1.799),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '1.8', 1.800, 1.899),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '1.9', 1.900, 1.999),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '2.0', 2.000, 2.099),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '2.1', 2.100, 2.199),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '2.2', 2.200, 2.299),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '2.3', 2.300, 2.399),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '2.4', 2.400, 2.499),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '2.5', 2.500, 2.599),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '2.6', 2.600, 2.699),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '2.7', 2.700, 2.799),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '2.8', 2.800, 2.899),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '2.9', 2.900, 2.999),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '3.0', 3.000, 3.099),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '3.1', 3.100, 3.199),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '3.2', 3.200, 3.299),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '3.3', 3.300, 3.399),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '3.4', 3.400, 3.499),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '3.5', 3.500, 3.599),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '3.6', 3.600, 3.699),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '3.7', 3.700, 3.799),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '3.8', 3.800, 3.899),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '3.9', 3.900, 3.999),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '4.0', 4.000, 4.099),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '4.1', 4.100, 4.199),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '4.2', 4.200, 4.299),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '4.3', 4.300, 4.399),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '4.4', 4.400, 4.499),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '4.5', 4.500, 4.599),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '4.6', 4.600, 4.699),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '4.7', 4.700, 4.799),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '4.8', 4.800, 4.899),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '4.9', 4.900, 4.999),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '5.0', 5.000, 5.099),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '5.1', 5.100, 5.199),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '5.2', 5.200, 5.299),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '5.3', 5.300, 5.399),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '5.4', 5.400, 5.499),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '5.5', 5.500, 5.599),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '5.6', 5.600, 5.699),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '5.7', 5.700, 5.799),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '5.8', 5.800, 5.899),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '5.9', 5.900, 5.999),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '6.0', 6.000, 6.099),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '6.1', 6.100, 6.199),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '6.2', 6.200, 6.299),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '6.3', 6.300, 6.399),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '6.4', 6.400, 6.499),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '6.5', 6.500, 6.599),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '6.6', 6.600, 6.699),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '6.7', 6.700, 6.799),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '6.8', 6.800, 6.899),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '6.9', 6.900, 6.999),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '7.0', 7.000, 7.099),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '7.1', 7.100, 7.199),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '7.2', 7.200, 7.299),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '7.3', 7.300, 7.399),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '7.4', 7.400, 7.499),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '7.5', 7.500, 7.599),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '7.6', 7.600, 7.699),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '7.7', 7.700, 7.799),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '7.8', 7.800, 7.899),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '7.9', 7.900, 7.999),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '8.0', 8.000, 8.099),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '8.1', 8.100, 8.199),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '8.2', 8.200, 8.299),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '8.3', 8.300, 8.399),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '8.4', 8.400, 8.499),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '8.5', 8.500, 8.599),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '8.6', 8.600, 8.699),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '8.7', 8.700, 8.799),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '8.8', 8.800, 8.899),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '8.9', 8.900, 8.999),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '9.0', 9.000, 9.099),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '9.1', 9.100, 9.199),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '9.2', 9.200, 9.299),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '9.3', 9.300, 9.399),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '9.4', 9.400, 9.499),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '9.5', 9.500, 9.599),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '9.6', 9.600, 9.699),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '9.7', 9.700, 9.799),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '9.8', 9.800, 9.899),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '9.9', 9.900, 9.949),
  ((SELECT MAX(id) FROM modules.tabela_arredondamento), '10.0', 9.950, 10.001);
