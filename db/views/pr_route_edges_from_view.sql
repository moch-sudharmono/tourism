create or replace view pr_route_edges_from_view as 
select 	distinct x.edge_from, x.location_from
from		pr_route_edges_view x