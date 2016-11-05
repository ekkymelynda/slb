SELECT SUM(G.`GR_JK` = "L") AS L, SUM(G.`GR_JK` = "P") AS P, COUNT(G.`GR_ID`) AS T
FROM `guru` G;

SELECT SUM(S.`SW_JK` = "L") AS L, SUM(S.`SW_JK` = "P") AS P, COUNT(S.`SW_ID`) AS T
FROM `siswa` S;

SELECT SUM(A.`AG_NAMA` = "Islam") AS A, SUM(A.`AG_NAMA` = "Kristen") AS B, SUM(A.`AG_NAMA` = "Katholik") AS C, SUM(A.`AG_NAMA` = "Hindu") AS D, SUM(A.`AG_NAMA` = "Budha") AS E, SUM(A.`AG_NAMA` = "Konghucu") AS F, SUM(A.`AG_NAMA` = "Lainnya") AS G, COUNT(S.`AG_ID`) AS T
FROM `siswa` S, `agama` A
WHERE S.`AG_ID` = A.`AG_ID`;

SELECT SUM(A.`AG_NAMA` = "Islam") AS A, SUM(A.`AG_NAMA` = "Kristen") AS B, SUM(A.`AG_NAMA` = "Katholik") AS C, SUM(A.`AG_NAMA` = "Hindu") AS D, SUM(A.`AG_NAMA` = "Budha") AS E, SUM(A.`AG_NAMA` = "Konghucu") AS F, SUM(A.`AG_NAMA` = "Lainnya") AS G, COUNT(S.`AG_ID`) AS T
FROM `siswa` S, `agama` A
WHERE S.`AG_ID` = A.`AG_ID` AND S.`SW_JK` = "L";

SELECT SUM(A.`AG_NAMA` = "Islam") AS A, SUM(A.`AG_NAMA` = "Kristen") AS B, SUM(A.`AG_NAMA` = "Katholik") AS C, SUM(A.`AG_NAMA` = "Hindu") AS D, SUM(A.`AG_NAMA` = "Budha") AS E, SUM(A.`AG_NAMA` = "Konghucu") AS F, SUM(A.`AG_NAMA` = "Lainnya") AS G, COUNT(S.`AG_ID`) AS T
FROM `siswa` S, `agama` A
WHERE S.`AG_ID` = A.`AG_ID` AND S.`SW_JK` = "P";

SELECT S.`SW_ID`, S.`SW_NAMA`, S.`SW_JK`, S.`NIS`, S.`NISN`
FROM `siswa` S;

SELECT SUM(S.`SW_JK` = "L") AS A, SUM(S.`SW_JK` = "P") AS B, COUNT(S.`SW_ID`) AS T
FROM `wali_murid` W, `penghasilan` P, `siswa` S
WHERE W.`PH_ID` = P.`PH_ID` AND P.`PH_BESARAN` = NULL AND W.`SW_ID` = S.`SW_ID`;

SELECT SUM(S.`SW_JK` = "L") AS A, SUM(S.`SW_JK` = "P") AS B, COUNT(S.`SW_ID`) AS T
FROM `wali_murid` W, `penghasilan` P, `siswa` S
WHERE W.`PH_ID` = P.`PH_ID` AND P.`PH_BESARAN` = 0 AND W.`SW_ID` = S.`SW_ID`;

SELECT SUM(S.`SW_JK` = "L") AS A, SUM(S.`SW_JK` = "P") AS B, COUNT(S.`SW_ID`) AS T
FROM `wali_murid` W, `penghasilan` P, `siswa` S
WHERE W.`PH_ID` = P.`PH_ID` AND P.`PH_BESARAN` > 0 AND P.`PH_BESARAN` < 500000 AND W.`SW_ID` = S.`SW_ID`;

SELECT SUM(S.`SW_JK` = "L") AS A, SUM(S.`SW_JK` = "P") AS B, COUNT(S.`SW_ID`) AS T
FROM `siswa` S
WHERE YEAR(CURDATE()) - YEAR(S.`SW_TGLLAHIR`) < 7;

SELECT SUM(S.`SW_JK` = "L") AS A, SUM(S.`SW_JK` = "P") AS B, COUNT(S.`SW_ID`) AS T
FROM `siswa` S
WHERE YEAR(CURDATE()) - YEAR(S.`SW_TGLLAHIR`) >= 7 AND YEAR(CURDATE()) - YEAR(S.`SW_TGLLAHIR`) <= 15;

SELECT SUM(S.`SW_JK` = "L") AS A, SUM(S.`SW_JK` = "P") AS B, COUNT(S.`SW_ID`) AS T
FROM `siswa` S
WHERE YEAR(CURDATE()) - YEAR(S.`SW_TGLLAHIR`) > 15;

SELECT SUM(S.`SW_JK` = "L") AS A, SUM(S.`SW_JK` = "P") AS B, COUNT(S.`SW_ID`) AS T
FROM `siswa` S;

SELECT SUM(S.`SW_JK` = "L") AS A, SUM(S.`SW_JK` = "P") AS B, COUNT(S.`SW_ID`) AS T
FROM `wali_murid` W, `penghasilan` P, `siswa` S
WHERE W.`PH_ID` = P.`PH_ID` AND P.`PH_BESARAN` >= 500000 AND P.`PH_BESARAN` <= 999999 AND W.`SW_ID` = S.`SW_ID`;

SELECT SUM(S.`SW_JK` = "L") AS A, SUM(S.`SW_JK` = "P") AS B, COUNT(S.`SW_ID`) AS T
FROM `wali_murid` W, `penghasilan` P, `siswa` S
WHERE W.`PH_ID` = P.`PH_ID` AND P.`PH_BESARAN` >= 1000000 AND P.`PH_BESARAN` <= 1999999 AND W.`SW_ID` = S.`SW_ID`;

SELECT SUM(S.`SW_JK` = "L") AS A, SUM(S.`SW_JK` = "P") AS B, COUNT(S.`SW_ID`) AS T
FROM `wali_murid` W, `penghasilan` P, `siswa` S
WHERE W.`PH_ID` = P.`PH_ID` AND P.`PH_BESARAN` >= 2000000 AND P.`PH_BESARAN` <= 4999999 AND W.`SW_ID` = S.`SW_ID`;

SELECT SUM(S.`SW_JK` = "L") AS A, SUM(S.`SW_JK` = "P") AS B, COUNT(S.`SW_ID`) AS T
FROM `wali_murid` W, `penghasilan` P, `siswa` S
WHERE W.`PH_ID` = P.`PH_ID` AND P.`PH_BESARAN` >= 5000000 AND P.`PH_BESARAN` <= 20000000 AND W.`SW_ID` = S.`SW_ID`;

SELECT SUM(S.`SW_JK` = "L") AS A, SUM(S.`SW_JK` = "P") AS B, COUNT(S.`SW_ID`) AS T
FROM `wali_murid` W, `penghasilan` P, `siswa` S
WHERE W.`PH_ID` = P.`PH_ID` AND P.`PH_BESARAN` > 20000000 AND W.`SW_ID` = S.`SW_ID`;

SELECT SUM(S.`SW_JK` = "L") AS A, SUM(S.`SW_JK` = "P") AS B, COUNT(S.`SW_ID`) AS T
FROM `wali_murid` W, `penghasilan` P, `siswa` S
WHERE W.`PH_ID` = P.`PH_ID` AND W.`SW_ID` = S.`SW_ID`;

SELECT R.`RM_BC` AS A, R.`RM_KELAS` AS B, SUM(S.`SW_JK` = "L") AS L, SUM(S.`SW_JK` = "P") AS P, COUNT(S.`SW_ID`) AS T, G.`GR_NAMA` AS G
FROM `rombel` R, `guru` G, `detil_rombel_siswa` D, `siswa` S
WHERE D.`RM_ID` = R.`RM_ID` AND D.`SW_ID` = S.`SW_ID` AND R.`GR_ID` = G.`GR_ID`;

SELECT R.`RM_KELAS`
FROM `rombel` R, `detil_rombel_siswa` Q, `siswa` S
WHERE R.`RM_ID` = Q.`RM_ID` AND Q.`SW_ID` = S.`SW_ID`;

SELECT *
FROM `siswa` S, `detil_rombel_siswa` D
WHERE S.`SW_ID` = D.`SW_ID`;