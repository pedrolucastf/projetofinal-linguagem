-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jun-2019 às 14:44
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetofinal-linguagem`
--
CREATE DATABASE IF NOT EXISTS `projetofinal-linguagem` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projetofinal-linguagem`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `linguagem`
--

CREATE TABLE `linguagem` (
  `id` int(11) NOT NULL,
  `oque` varchar(1080) NOT NULL,
  `historia` varchar(1080) NOT NULL,
  `helloworld` varchar(1080) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `linguagem`
--

INSERT INTO `linguagem` (`id`, `oque`, `historia`, `helloworld`) VALUES
(1, 'C é uma linguagem de programação compilada de propósito geral, estruturada, imperativa, procedural, padronizada por Organização Internacional para Padronização, criada em 1972 por Dennis Ritchie na empresa AT&T Bell Labs para desenvolvimento do sistema operacional Unix.                    ', 'O desenvolvimento inicial de C ocorreu no AT&T Bell Labs entre 1969 e 1973. de acordo com Ritchie, o período mais criativo ocorreu em 1972. A linguagem foi chamada \"C\", porque suas características foram obtidas a partir de uma linguagem anteriormente chamado de \"B\", que de acordo com a Ken Thompson era versão reduzida da linguagem de programação BCPL.\r\nA versão original PDP-11 do sistema Unix foi desenvolvido em assembly. Em 1973, com a adição dos tipos struct, a linguagem C tornou-se poderosa o suficiente para que a maior parte do kernel do Unix fosse reescrito em C. Este foi um dos primeiros núcleos de sistemas operacionais implementados numa linguagem diferente da linguagem Assembly. Em 1977, foram feitas novas mudanças por Ritchie e Stephen C. Johnson para facilitar a portabilidade do sistema operacional Unix. O Portable C Compiler de Johnson serviu de base para várias implementações de C em novas plataformas.                ', 'int main(void)<br>\r\n{<br>\r\n	printf(\"Olá Mundo!\\n\");<br>\r\n	return 0;<br>\r\n}<br>'),
(2, 'C++ (em português: lê-se \"cê mais mais\" , em inglês lê-se ci plase plase) é uma linguagem de programação compilada multi-paradigma (seu suporte inclui linguagem imperativa, orientada a objetos e genérica) e de uso geral. Desde os anos 1990 é uma das linguagens comerciais mais populares, sendo bastante usada também na academia por seu grande desempenho e base de utilizadores.\r\nBjarne Stroustrup desenvolveu o C++ (originalmente com o nome C with Classes,que significa C com classes em português) em 1983 no Bell Labs como um adicional à linguagem C. Novas características foram adicionadas com o tempo[5], como funções virtuais, sobrecarga de operadores, herança múltipla, gabaritos e tratamento de exceções.    ', 'O C++ foi inicialmente desenvolvido por Bjarne Stroustrup dos Bell Labs, durante a década de 1980 com o objetivo implementar uma versão distribuída do núcleo Unix.Como o Unix era escrito em C, dever-se-ia manter a compatibilidade, ainda que adicionando novos recursos. Alguns dos desafios incluíam simular a infraestrutura da comunicação entre processos num sistema distribuído ou de memória compartilhada e escrever drivers para tal sistema. Stroustrup percebeu que a linguagem Simula 67 possuía características bastante úteis para o desenvolvimento de software, mas que era muito lenta para uso prático. Por outro lado, a linguagem BCPL era rápida, mas possuía demasiado baixo nível, dificultando sua utilização no desenvolvimento de aplicações. A partir de sua experiência de doutorado, começou a acrescentar elementos do Simula 67 no C, especialmente os recursos de criação e manipulação de objetos. O C foi escolhido como base de desenvolvimento da nova linguagem pois possuía uma proposta de uso genérico, era rápido e também portável para diversas plataformas.', 'int main ()<br>\r\n{<br>\r\n  cout << \"Olá mundo!\"; <br>\r\n  return 0;<br>\r\n}'),
(3, 'Ruby é uma linguagem de programação interpretada multiparadigma, de tipagem dinâmica e forte, com gerenciamento de memória automático, originalmente planejada e desenvolvida no Japão em 1995, por Yukihiro \"Matz\" Matsumoto, para ser usada como linguagem de script. Matz queria uma linguagem de script que fosse mais poderosa do que Perl, e mais orientada a objetos do que Python. Ruby suporta programação funcional, orientada a objetos, imperativa e reflexiva. Foi inspirada principalmente por Python, Perl, Smalltalk, Eiffel, Ada e Lisp, sendo muito similar em vários aspectos a Python.', 'A linguagem Ruby foi concebida em 24 de fevereiro de 1993 por Yukihiro Matsumoto, que pretendia criar uma nova linguagem que balanceava programação funcional com a programação imperativa.Matsumoto afirmou: \"Eu queria uma linguagem de script que fosse mais poderosa do que Perl, e mais orientada a objetos do que Python. É por isso que eu decidi desenvolver minha própria linguagem.\".\r\nApós o lançamento do Ruby 1.3 em 1999, iniciou-se a primeira lista de discussão em inglês chamada Ruby-Talk, marcando um interesse crescente na linguagem fora do Japão. Em setembro de 2000, o primeiro livro em inglês, Programming Ruby, foi impresso, sendo mais tarde liberado gratuitamente para o público, ajudando no processo de adoção de Ruby por falantes do inglês.\r\n', 'puts \"Olá, Mundo!\"'),
(4, 'C# (lê-se \"cê xarpe\") é uma linguagem de programação, multiparadigma, de tipagem forte, desenvolvida pela Microsoft como parte da plataforma .NET. A sua sintaxe orientada a objetos foi baseada no C++ mas inclui muitas influências de outras linguagens de programação, como Object Pascal e, principalmente, Java. O código fonte é compilado para Common Intermediate Language (CIL) que é interpretado pela máquina virtual Common Language Runtime (CLR). C# é uma das linguagens projetadas para funcionar na Common Language Infrastructure da plataforma .NET Framework.', 'A linguagem C# faz parte do conjunto de ferramentas oferecidas na plataforma .NET e surge como uma linguagem simples, robusta, orientada a objetos, fortemente tipada e altamente escalável a fim de permitir que uma mesma aplicação possa ser executada em diversos dispositivos de hardware, independentemente destes serem PCs, handhelds ou qualquer outro dispositivo móvel.', 'using System;<br>\r\nnamespace HelloWorld<br>\r\n{<br>\r\n    class Hello <br>\r\n    {<br>\r\n        static void Main() <br>\r\n        {<br>\r\n            Console.WriteLine(\"Hello World!\");<br>\r\n        }<br>\r\n    }<br>\r\n}<br>'),
(5, 'Python é uma linguagem de programação de alto nível, interpretada, de script, imperativa, orientada a objetos, funcional, de tipagem dinâmica e forte. Foi lançada por Guido van Rossum em 1991. Atualmente possui um modelo de desenvolvimento comunitário, aberto e gerenciado pela organização sem fins lucrativos Python Software Foundation. Apesar de várias partes da linguagem possuírem padrões e especificações formais, a linguagem como um todo não é formalmente especificada. O padrão de facto é a implementação CPython.\r\nA linguagem foi projetada com a filosofia de enfatizar a importância do esforço do programador sobre o esforço computacional. Prioriza a legibilidade do código sobre a velocidade ou expressividade. Combina uma sintaxeconcisa e clara com os recursos poderosos de sua biblioteca padrão e por módulos e frameworks desenvolvidos por terceiros.\r\n', 'O Python foi concebido no final de 1989por Guido van Rossum no Instituto de Pesquisa Nacional para Matemática e Ciência da Computação (CWI), nos Países Baixos, como um sucessor da ABC capaz de tratar exceções e prover interface com o sistema operacional Amoeba através de scripts. Também da CWI, a linguagem ABC era mais produtiva que C, ainda que com o custo do desempenho em tempo de execução. Mas ela não possuía funcionalidades importantes para a interação com o sistema operacional, uma necessidade do grupo. Um dos focos primordiais de Python era aumentar a produtividade do programador.\r\nPython foi feita com base na linguagem ABC, possui parte da sintaxe derivada do C, compreensão de listas, funções anonimas e função map de Haskell. Os iteradores são baseados na Icon, tratamentos de exceção e módulos da Modula-3, expressões regulares de Perl.', 'print \"Hello World\"'),
(6, 'Java é uma linguagem de programação orientada a objetos desenvolvida na década de 90 por uma equipe de programadores chefiada por James Gosling, na empresa Sun Microsystems. Em 2008 o Java foi adquirido pela empresa Oracle Corporation. Diferente das linguagens de programação modernas, que são compiladas para código nativo, a linguagem Java é compilada para um bytecode que é interpretado por uma máquina virtual (Java Virtual Machine, mais conhecida pela sua abreviação JVM). A linguagem de programação Java é a linguagem convencional da Plataforma Java, mas não é a sua única linguagem. J2ME Para programas e jogos de computador, celular, calculadoras, ou até mesmo o rádio do carro. ', 'Em 1991, na Sun Microsystems, foi iniciado o Green Project, o berço do Java, uma linguagem de programação orientada a objetos. Os mentores do projeto eram Patrick Naughton, Mike Sheridan, e James Gosling. Eles acreditavam que, eventualmente, haveria uma convergência dos computadores com os equipamentos e eletrodomésticos frequentemente usados pelas pessoas no seu dia-a-dia. Para provar a viabilidade desta ideia, 13 pessoas trabalharam arduamente durante 18 meses. No verão de 1992 eles emergiram de um escritório de Sand Hill Road, no Menlo Park, com uma demonstração funcional da ideia inicial. O protótipo se chamava *7 (lê-se “Star Seven”), um controle remoto com uma interface gráfica touchscreen. Para o *7, foi criado um mascote, hoje amplamente conhecido no mundo Java, o Duke. Gosling foi incumbido de adaptar o Oak para a internet e em janeiro 1995 foi lançada uma nova versão do Oak que foi rebatizada para Java. ', 'public class OlaMundo {<br>\r\n    public static void main(String[] args) {<br>\r\n        System.out.println(\"Olá Mundo!\");<br>\r\n    }<br>\r\n}<br>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quemsomos`
--

CREATE TABLE `quemsomos` (
  `id` int(11) NOT NULL,
  `texto` varchar(1080) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quemsomos`
--

INSERT INTO `quemsomos` (`id`, `texto`) VALUES
(1, '                              O site foi criado no ano de 2019 pelo Técnico em Informática Pedro Lucas de Oliveira Toffoli (formado pelo Senac Botucatu) com o objetivo de auxiliar estudantes e profissionais de tecnologia na hora de aprender uma nova linguagem de programação com informações básicas sobre as principais linguagens de programação disponível no mercado.\r\n                A ideia surgiu após ver necessidade em encontrar informações sobre uma linguagem de informação em um só site, com isso, foi desenvolvido o site com o objetivo de otimizar tudo em um só lugar que contém um pouco da história, notícias, breves tutoriais e um link que direciona você para um compilador para colocar em prática tudo que você aprendeu.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `email`, `senha`) VALUES
(19, 'Administrador do Sistema', 'admin', 'admin@admin.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `linguagem`
--
ALTER TABLE `linguagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quemsomos`
--
ALTER TABLE `quemsomos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `linguagem`
--
ALTER TABLE `linguagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quemsomos`
--
ALTER TABLE `quemsomos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
