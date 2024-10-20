<ul>
        {foreach from=$canciones item=$cancion}
            <li>
                <div>
                    <span>{$cancion->nombre_cancion}</span>
                    <span>{$cancion->genero}</span>
                    <span>{$cancion->duracion_cancion}</span>
                </div>
            </li>
        {/foreach}
</ul>
<a href="{BASE_URL}">
    <button>volver</button>
</a>