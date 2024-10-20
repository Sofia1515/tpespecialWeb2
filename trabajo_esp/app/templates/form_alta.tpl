<form action="{if isset($artista->id_artista)}{BASE_URL}/send-edit{else}agregar{/if}" method="POST">
  <!-- Hidden field for id -->
  <input type="hidden" name="id" value="{$artista->id_artista|default:''}">

  <label for="nombreArtista">Nombre Artista:</label><br>
  <input type="text" id="nombreArtista" name="nombreArtista" value="{$artista->nombre_artista|default:''}" required>

  <label for="fechaNacimiento">Fecha de Nacimiento:</label><br>
<input type="date" id="fechaNacimiento" name="fechaNacimiento" value="{$artista->fecha_nacimiento|default:''}" required>

  <label for="pais">País:</label><br>
<input type="text" id="pais" name="pais" value="{$artista->pais|default:''}" required>

  <button type="submit">{if isset($artista->id_artista)}Actualizar{else}Agregar{/if} Artista</button>
</form>
