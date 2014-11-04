create or replace view pr_lokasi_wisata_view as
select 		a.id_lokasi_wisata, a.id_lokasi_wisata_kategori, a.parent_id,
				a.nama_lokasi_wisata_ina, a.nama_lokasi_wisata_eng,
				a.deskripsi_ina, a.deskripsi_eng, a.id_peta,
				b.lat, b.lng, b.name, b.desc_point
from 			pr_lokasi_wisata a
left join	pointer b on b.id = a.id_peta