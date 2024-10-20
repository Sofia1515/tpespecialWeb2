{include file = "app/templates/form_alta.tpl"}

<ul>
        {foreach from=$categories item=$category}
            <li>
                <div>
                    <span>{$category->id_artista}</span>
                    <span>{$category->nombre_artista}</span>
                    <span>{$category->pais}</span>
                </div>
                <div>
                    <a href="eliminar/{$category->id_artista}" type="button">borrar</a>
                </div>
                <div>
                    <a href="editar/{$category->id_artista}" type="button">editar</a>
                </div>
            </li>
        {/foreach}
</ul>