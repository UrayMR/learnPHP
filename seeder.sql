INSERT INTO Fakultas (name) VALUES 
('Fakultas Teknik'),
('Fakultas Ekonomi'),
('Fakultas Kedokteran'),
('Fakultas Hukum'),
('Fakultas Ilmu Komputer');

INSERT INTO Prodi (name, idFakultas) VALUES 
('Teknik Informatika', 1),
('Teknik Sipil', 1),
('Manajemen', 2),
('Akuntansi', 2),
('Ilmu Hukum', 4);

INSERT INTO Mahasiswa (npm, name, idProdi) VALUES 
('23081010029', 'Budi Santoso', 1),
('23081010030', 'Siti Aminah', 2),
('23081010031', 'Andi Wijaya', 3),
('23081010032', 'Rina Kartika', 4),
('23081010033', 'Dian Pratama', 5);

INSERT INTO MataKuliah (name, idProdi) VALUES 
('Pemrograman Web', 1),
('Struktur Data', 1),
('Manajemen Keuangan', 3),
('Hukum Perdata', 5),
('Akuntansi Biaya', 4);

INSERT INTO RuanganKelas (name, idFakultas) VALUES 
('Ruang 101', 1),
('Ruang 202', 2),
('Ruang 303', 3),
('Ruang 404', 4),
('Ruang 505', 5);

INSERT INTO KRS (npm, idMataKuliah) VALUES 
('23081010029', 1),
('23081010029', 2),
('23081010030', 3),
('23081010031', 4),
('23081010032', 5);

