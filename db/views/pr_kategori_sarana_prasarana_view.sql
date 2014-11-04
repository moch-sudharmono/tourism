create or replace view pr_kategori_sarana_prasarana_view as
select 		a.id_kategori_sarana_prasarana, a.kategori_sarana_prasarana_ina, a.kategori_sarana_prasarana_eng,
				b.icon
from 			pr_kategori_sarana_prasarana a
left join	pr_icon b on b.id_icon = a.icon
;