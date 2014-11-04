create or replace view pr_lokasi_wisata_gambar_view as 
select 		a.id_pr_lokasi_wisata_gambar, a.id_lokasi_wisata, a.gambar, a.deskripsi_ina, a.deskripsi_eng,
				b.nama_lokasi_wisata_ina, b.nama_lokasi_wisata_eng
from 			pr_lokasi_wisata_gambar a
left join	pr_lokasi_wisata b on b.id_lokasi_wisata = a.id_lokasi_wisata
;