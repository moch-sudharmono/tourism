create or replace view pr_berita_tag_trans_view as 
select		b.id_berita, b.judul_berita_ina, b.judul_berita_eng,
				b.isi_berita_ina, b.isi_berita_eng, b.tanggal_berita,
				a.id_berita_tag, c.tag_ina, c.tag_eng
from			pr_berita_tag_trans a
left join	pr_berita b on a.id_berita = b.id_berita
left join	pr_berita_tag c on c.id_berita_tag = a.id_berita_tag