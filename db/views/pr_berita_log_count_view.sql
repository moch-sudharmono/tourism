create view pr_berita_log_count_view as 
select		count(a.id_berita_log) as total,
				a.id_berita
from 			pr_berita_log a
group by		a.id_berita