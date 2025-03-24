CREATE TABLE Fakultas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
);

CREATE TABLE Prodi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    idFakultas INT,
    FOREIGN KEY (idFakultas) REFERENCES Fakultas(id)
);

CREATE TABLE Mahasiswa (
    npm VARCHAR(20) PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    idProdi INT,
    FOREIGN KEY (idProdi) REFERENCES Prodi(id)
);

CREATE TABLE MataKuliah (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    idProdi INT,
    FOREIGN KEY (idProdi) REFERENCES Prodi(id)
);

CREATE TABLE RuanganKelas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    idFakultas INT,
    FOREIGN KEY (idFakultas) REFERENCES Fakultas(id)
);

CREATE TABLE KRS (
    id INT AUTO_INCREMENT PRIMARY KEY,
    npm VARCHAR(20),
    idMataKuliah INT,
    FOREIGN KEY (npm) REFERENCES Mahasiswa(npm) ON DELETE CASCADE,
    FOREIGN KEY (idMataKuliah) REFERENCES Mata_Kuliah(id) ON DELETE CASCADE
);

SELECT m.npm, m.name AS Mahasiswa, mk.name AS Mata_Kuliah
FROM KRS krs
JOIN Mahasiswa m ON krs.npm = m.npm
JOIN Mata_Kuliah mk ON krs.idMataKuliah = mk.id;
