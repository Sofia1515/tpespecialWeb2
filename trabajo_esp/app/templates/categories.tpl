<ul>
        {foreach from=$categories item=$category}
            <li>
                <div>
                    <span>{$category->id_artista}</span>
                    <span>{$category->nombre_artista}</span>
                    <span>{$category->pais}</span>
                </div>
                <div>
                    <a href="ver-canciones/{$category->id_artista}" type="button">Ver Canciones</a>
                </div>
            </li>
        {/foreach}
</ul>