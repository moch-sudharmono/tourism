create or replace view pr_berita_tag_trans_group_view as 
select		distinct btt.id_berita_tag, bt.tag
from			pr_berita_tag_trans btt
left join	pr_berita_tag bt on bt.id_berita_tag = btt.id_berita_tag