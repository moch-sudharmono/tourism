create or replace view tic_view as
select		b.name, b.desc_point, b.picture, b.panorama, b.category,
				b.lat, b.lng
from			pr_global a
left join	pointer b on b.id = a.val_int
where			a.nama_variabel = "map_id"
;
