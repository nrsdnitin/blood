select id, (3959 * acos( cos( radians(20.3763716) ) * cos( radians( `location_latitude` ) )
    * cos( radians( `location_longitude` ) - radians(72.8373814) ) + sin( radians(20.3763716) ) * sin(radians(`location_latitude`)) ) ) AS distance
FROM users
HAVING distance < 50
ORDER BY distance
