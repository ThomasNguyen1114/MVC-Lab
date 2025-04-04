drop database if exists practiceExam2;
drop user if exists 'exam2user'@'localhost';
create database practiceExam2;
use practiceExam2;

create user 'exam2user'@'localhost' identified by 'exam2pass';
grant all on practiceExam2.* to 'exam2user'@'localhost';

CREATE TABLE scientists (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    timePeriod VARCHAR(50),
    nationality VARCHAR(50),
    contribution TEXT
);

INSERT INTO scientists (name, timePeriod, nationality, contribution) VALUES
('Albert Einstein', '1879-1955', 'German', 'Theory of relativity, E=mc^2'),
('Isaac Newton', '1643-1727', 'British', 'Laws of motion and universal gravitation'),
('Marie Curie', '1867-1934', 'Polish-French', 'Research on radioactivity, first woman to win a Nobel Prize'),
('Nikola Tesla', '1856-1943', 'Serbian-American', 'AC electrical system, Tesla coil'),
('Thomas Edison', '1847-1931', 'American', 'Inventions including the phonograph, the motion picture camera, and the electric light bulb'),
('Galileo Galilei', '1564-1642', 'Italian', 'Improvements to the telescope, support of heliocentrism'),
('Leonardo da Vinci', '1452-1519', 'Italian', 'Conceptual inventions, including helicopters and tanks, detailed anatomical studies'),
('Alexander Graham Bell', '1847-1922', 'Scottish-American', 'Invention of the telephone'),
('Charles Darwin', '1809-1882', 'British', 'Theory of evolution by natural selection'),
('James Clerk Maxwell', '1831-1879', 'British', 'Formulation of electromagnetic theory'),
('Michael Faraday', '1791-1867', 'British', 'Electromagnetic induction and electrochemistry'),
('Enrico Fermi', '1901-1954', 'Italian-American', 'Developed the first nuclear reactor, contributions to quantum theory and nuclear physics'),
('Richard Feynman', '1918-1988', 'American', 'Quantum electrodynamics, Nobel Prize in Physics'),
('Niels Bohr', '1885-1962', 'Danish', 'Model of the atom and quantum theory'),
('Max Planck', '1858-1947', 'German', 'Originator of quantum theory'),
('Robert Hooke', '1635-1703', 'British', 'Elasticity theory (Hooke\'s Law), contributions to microscopy and physics'),
('Dmitri Mendeleev', '1834-1907', 'Russian', 'Periodic table of elements'),
('Louis Pasteur', '1822-1895', 'French', 'Germ theory of disease, pasteurization'),
('Johannes Kepler', '1571-1630', 'German', 'Laws of planetary motion'),
('Gregor Mendel', '1822-1884', 'Austrian', 'Founder of modern genetics'),
('Stephen Hawking', '1942-2018', 'British', 'Theoretical cosmology, black hole radiation'),
('Werner Heisenberg', '1901-1976', 'German', 'Quantum mechanics, uncertainty principle'),
('Carl Linnaeus', '1707-1778', 'Swedish', 'Taxonomy and classification of living organisms'),
('Ada Lovelace', '1815-1852', 'British', 'First computer algorithm, considered the first computer programmer'),
('George Washington Carver', '1864-1943', 'American', 'Innovative agricultural research, especially with peanuts'),
('Francis Crick', '1916-2004', 'British', 'Discovery of the structure of DNA'),
('Erwin Schrödinger', '1887-1961', 'Austrian', 'Wave mechanics and Schrödinger equation in quantum physics'),
('Paul Dirac', '1902-1984', 'British', 'Quantum mechanics, Dirac equation for fermions'),
('Alessandro Volta', '1745-1827', 'Italian', 'Invention of the electric battery'),
('John von Neumann', '1903-1957', 'Hungarian-American', 'Game theory, von Neumann architecture in computers'),
('Grace Hopper', '1906-1992', 'American', 'Development of early programming languages, COBOL pioneer'),
('Rosalind Franklin', '1920-1958', 'British', 'X-ray crystallography leading to the discovery of DNA structure'),
('Henri Becquerel', '1852-1908', 'French', 'Discovery of radioactivity'),
('Sigmund Freud', '1856-1939', 'Austrian', 'Founder of psychoanalysis'),
('Florence Nightingale', '1820-1910', 'British', 'Founder of modern nursing, statistics in health care'),
('Guglielmo Marconi', '1874-1937', 'Italian', 'Development of radio communication'),
('Alan Turing', '1912-1954', 'British', 'Concepts of algorithms and computation, Turing machine'),
('Hedy Lamarr', '1914-2000', 'Austrian-American', 'Frequency-hopping spread spectrum technology for wireless communications'),
('Joseph Fourier', '1768-1830', 'French', 'Fourier series and Fourier transform in mathematics'),
('James Watt', '1736-1819', 'Scottish', 'Improvements to the steam engine'),
('Lise Meitner', '1878-1968', 'Austrian-Swedish', 'Discovery of nuclear fission'),
('Emmy Noether', '1882-1935', 'German', 'Noether\'s theorem in physics and mathematics'),
('Srinivasa Ramanujan', '1887-1920', 'Indian', 'Contributions to mathematical analysis, number theory, and continued fractions'),
('Carolyn Bertozzi', '1966-', 'American', 'Pioneering work in bioorthogonal chemistry'),
('Tim Berners-Lee', '1955-', 'British', 'Inventor of the World Wide Web'),
('Archimedes', '287-212 BC', 'Greek', 'Principles of buoyancy, Archimedes\' screw'),
('Hypatia', 'c. 360-415', 'Egyptian', 'Contributions to mathematics and philosophy'),
('Leonhard Euler', '1707-1783', 'Swiss', 'Mathematics, including graph theory and topology'),
('Johann Gutenberg', 'c. 1400-1468', 'German', 'Invention of the printing press with movable type'),
('J.J. Thomson', '1856-1940', 'British', 'Discovery of the electron'),
('Hermann von Helmholtz', '1821-1894', 'German', 'Law of conservation of energy in physiology and physics');
