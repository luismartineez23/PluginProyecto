<table>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="url">URL</label>
        </th>
        <td>
            <input type="text" id="url" name="url" value="<?php echo @get_post_meta($post->ID, 'url', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="socio">Socio</label>
        </th>
        <td>
            <input type="text" id="socio" name="socio" value="<?php echo @get_post_meta($post->ID, 'socio', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="milestone">Milestone</label>
        </th>
        <td>
            <input type="text" id="milestone" name="milestone" value="<?php echo @get_post_meta($post->ID, 'milestone', true); ?>" />
        </td>
    </tr>
</table>