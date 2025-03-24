CREATE TABLE Fakultas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE Prodi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    idFakultas INT,
    FOREIGN KEY (idFakultas) REFERENCES Fakultas(id) ON DELETE CASCADE
);

CREATE TABLE Mahasiswa (
    npm VARCHAR(20) PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    idProdi INT,
    FOREIGN KEY (idProdi) REFERENCES Prodi(id) ON DELETE CASCADE
);

CREATE TABLE MataKuliah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    sks INT NOT NULL,
    idProdi INT,
    FOREIGN KEY (idProdi) REFERENCES Prodi(id) ON DELETE CASCADE
);

CREATE TABLE RuanganKelas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    capacity INT NOT NULL,
    idFakultas INT,
    FOREIGN KEY (idFakultas) REFERENCES Fakultas(id) ON DELETE CASCADE
);

CREATE TABLE KRS (
    id INT AUTO_INCREMENT PRIMARY KEY,
    npm VARCHAR(20),
    idMataKuliah INT,
    FOREIGN KEY (npm) REFERENCES Mahasiswa(npm) ON DELETE CASCADE,
    FOREIGN KEY (idMataKuliah) REFERENCES MataKuliah(id) ON DELETE CASCADE
);

SELECT m.npm, m.name AS Mahasiswa, p.name AS Prodi, f.name AS Fakultas, COUNT(mk.id) AS MataKuliahCount
  FROM Mahasiswa m
  JOIN Prodi p ON m.idProdi = p.id
  JOIN Fakultas f ON p.idFakultas = f.id
  LEFT JOIN MataKuliah mk ON mk.idProdi = p.id
  GROUP BY m.npm
  ORDER BY m.npm
  LIMIT 5
