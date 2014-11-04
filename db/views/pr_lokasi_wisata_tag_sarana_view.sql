create or replace view pr_lokasi_wisata_tag_sarana_view as 
select			a.id_pr_lokasi_wisata_tag_sarana, a.id_sarana_prasarana,
					a.id_lokasi_wisata,
					b.nama_ina, b.nama_eng,
					b.deskripsi_ina, b.deskripsi_eng,
					b.id_kategori_sarana_prasarana
from				pr_lokasi_wisata_tag_sarana a
left join		pr_sarana_prasarana b on b.id_sarana_prasarana = a.id_sarana_prasarana