create or replace view pr_route_edges_view as 
select		re.id_edges, re.edge_from, re.edge_to,
				rn.nodes as location_from, rn2.nodes as location_to 
from			pr_route_edges re
left join 	pr_route_nodes rn on rn.id_nodes = re.edge_from
left join	pr_route_nodes rn2 on rn2.id_nodes = re.edge_to