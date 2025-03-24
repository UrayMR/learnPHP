INSERT INTO Fakultas (name) VALUES 
('Fakultas Teknik'),
('Fakultas Ekonomi dan Bisnis'),
('Fakultas Ilmu Komputer'),
('Fakultas Kedokteran'),
('Fakultas Hukum');

INSERT INTO Prodi (name, idFakultas) VALUES 
('Teknik Informatika', 1),
('Sistem Informasi', 3),
('Manajemen', 2),
('Akuntansi', 2),
('Ilmu Hukum', 5),
('Pendidikan Dokter', 4),
('Teknik Elektro', 1);

INSERT INTO Mahasiswa (npm, name, idProdi) VALUES 
('23081010029', 'Ahmad Fauzi', 1),
('23081010030', 'Dewi Rahmawati', 2),
('23081010031', 'Budi Santoso', 3),
('23081010032', 'Siti Nurhaliza', 4),
('23081010033', 'Muhammad Rizky', 5),
('23081010034', 'Anisa Putri', 6),
('23081010035', 'Reza Firmansyah', 7);

INSERT INTO MataKuliah (name, sks, idProdi) VALUES 
('Pemrograman Web', 3, 1),
('Basis Data', 4, 2),
('Manajemen Keuangan', 3, 3),
('Akuntansi Biaya', 3, 4),
('Hukum Perdata', 4, 5),
('Anatomi Tubuh Manusia', 4, 6),
('Rangkaian Listrik', 3, 7),
('Algoritma dan Pemrograman', 4, 1),
('Sistem Operasi', 3, 2),
('Etika Profesi', 2, 5);

INSERT INTO RuanganKelas (name, capacity, idFakultas) VALUES 
('R101', 40, 1),
('R102', 35, 1),
('E201', 50, 2),
('E202', 45, 2),
('IF301', 60, 3),
('IF302', 55, 3),
('M401', 30, 4),
('M402', 25, 4),
('H501', 40, 5),
('H502', 35, 5);

INSERT INTO KRS (npm, idMataKuliah) VALUES 
('23081010029', 1),
('23081010029', 8),
('23081010030', 2),
('23081010030', 9),
('23081010031', 3),
('23081010032', 4),
('23081010033', 5),
('23081010033', 10),
('23081010034', 6),
('23081010035', 7);