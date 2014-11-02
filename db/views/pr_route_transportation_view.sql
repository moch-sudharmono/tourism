create or replace view pr_route_transportation_view as 
select			a.id_edges, a.estimasi_biaya, a.id_sarana_prasarana,
					a.deskripsi_ina, a.deskripsi_eng, b.nama_ina, b.nama_eng,
					c.edge_from, c.edge_to, c.location_from, c.location_to, b.id_kategori_sarana_prasarana,
					e.icon
from				pr_route_transportation a
left join		pr_sarana_prasarana b on b.id_sarana_prasarana = a.id_sarana_prasarana
left join		pr_route_edges_view c on c.id_edges = a.id_edges
left join		pr_kategori_sarana_prasarana d on d.id_kategori_sarana_prasarana = b.id_kategori_sarana_prasarana
left join		pr_icon e on e.id_icon = b.icon
;