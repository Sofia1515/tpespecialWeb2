<ul>
        {foreach from=$canciones item=$cancion}
            <li>
                <div>
                    <span>{$cancion->nombre_cancion}</span>
                    <span>{$cancion->genero}</span>
                    <span>{$cancion->duracion}</span>
                    <span>{$cancion->nombre_artista}</span>
                </div>
            </li>
        {/foreach}
</ul>
<a href="{BASE_URL/listar-artistas}">
    <button>volver</button>
</a>