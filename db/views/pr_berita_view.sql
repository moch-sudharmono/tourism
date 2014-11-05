create or replace view pr_berita_view as
select		a.id_berita, a.judul_berita_ina, a.judul_berita_eng,
				a.isi_berita_ina, a.isi_berita_eng, a.tanggal_berita,
				ifnull(b.total, 0) as total
from			pr_berita a
left join	pr_berita_log_count_view b on b.id_berita = a.id_berita