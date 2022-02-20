<form action="#" class="contact_form" id="contact_form_<?php echo $contact_id; ?>" data-id="<?php echo $contact_id; ?>" data-action="<?php echo admin_url('admin-ajax.php'); ?>" data-info1="<?php echo $from[0]; ?>" data-info2="<?php echo $from[1]; ?>" data-info3="<?php echo $to[0]; ?>" data-info4="<?php echo $to[1]; ?>" data-info5="<?php echo $subject; ?>">
    <?php
    $fields = get_field('main_fields',$contact_id);
    foreach ($fields as $item) {
        ?>

        <?php if($item['type_field'] == 'select'){ ?>

            <div class="input_wrap input_wrap_<?php echo $item['technical_field_name']; ?>">
                <?php if ($item['label']) { ?>
                    <label for="input_<?php echo $contact_id; ?>_<?php echo $item['technical_field_name']; ?>"><?php echo $item['label']; ?></label>
                <?php } ?>
                <?php if ($item['value']) { ?>
                    <select id="input_<?php echo $contact_id; ?>_<?php echo $item['technical_field_name']; ?>"
                            name="<?php echo $item['technical_field_name']; ?>"
                            class="<?php echo $item['type_field']; ?> <?php if($item['required']){ echo 'required'; } ?>">
                        <?php
                        if ($item['value']){
                            $values = explode ("\n",$item['value']);
                            foreach($values as $items){
                                $elements = explode (" : ",$items);
                                $quantity = count($elements);
                                if ($quantity == 1){
                                    ?>
                                    <option value="<?php echo str_replace('(!)','',$elements[0]); ?>"
                                    <?php
                                    $selected = stripos($elements[0], '(!)');
                                    if ($selected !== false){
                                        ?> selected <?php
                                    } ?> ><?php echo str_replace('(!)','',$elements[0]); ?></option>
                                    <?php
                                }elseif($quantity == 2){
                                    ?>
                                    <option value="<?php echo $elements[0]; ?>"
                                        <?php
                                        $selected = stripos($elements[1], '(!)');
                                        if ($selected !== false){
                                            ?> selected <?php
                                        } ?>
                                    ><?php echo str_replace('(!)','',$elements[1]); ?></option>
                                    <?php

                                }else{
                                    echo('ERROR!');
                                }
                            }
                        }
                        ?>
                    </select>
                <?php } ?>
            </div>

        <?php } elseif ($item['type_field'] == 'checkbox'){ ?>

            <div class="input_wrap input_wrap_<?php echo $item['technical_field_name']; ?>">
                <div class="name_form_block"><?php echo $item['label']; ?></div>
                <div class="<?php if($item['required']){ echo 'required'; } ?> ">
                    <?php if ($item['value']) { ?>
                        <?php
                        if ($item['value']){
                            $values = explode ("\n",$item['value']);
                            foreach($values as $items){
                                $elements = explode (" : ",$items);
                                $quantity = count($elements);
                                if ($quantity == 1){
                                    ?>
                                        <input
                                                name="<?php echo $item['technical_field_name']; ?>[]"
                                                value="<?php echo str_replace('(!)','',$elements[0]); ?>"
                                                id="<?php echo str_replace('(!)','',$elements[0]); ?>"
                                                class="<?php echo $item['type_field']; ?> <?php if($item['required']){ echo 'required'; } ?>"
                                                type="checkbox"
                                            <?php
                                            $selected = stripos($elements[0], '(!)');
                                            if ($selected !== false){
                                                ?> checked <?php
                                            } ?>
                                        >
                                        <label for="<?php echo str_replace('(!)','',$elements[0]); ?>"><?php echo str_replace('(!)','',$elements[0]); ?></label>
                                    <?php
                                }elseif($quantity == 2){
                                    ?>
                                        <input
                                                name="<?php echo $item['technical_field_name']; ?>[]"
                                                value="<?php echo $elements[0]; ?>"
                                                id="<?php echo $elements[0]; ?>"
                                                class="<?php echo $item['type_field']; ?> <?php if($item['required']){ echo 'required'; } ?>"
                                                type="checkbox"
                                            <?php
                                            $selected = stripos($elements[1], '(!)');
                                            if ($selected !== false){
                                                ?> checked <?php
                                            } ?>
                                        >
                                        <label for="<?php echo $elements[0]; ?>"><?php echo str_replace('(!)','',$elements[1]); ?></label>
                                    <?php

                                }else{
                                    echo('ERROR!');
                                }
                            }
                        }
                        ?>
                    <?php }
                    ?>
                </div>
            </div>

        <?php } elseif ($item['type_field'] == 'radio'){ ?>

            <div class="input_wrap input_wrap_<?php echo $item['technical_field_name']; ?>">
                <div class="name_form_block"><?php echo $item['label']; ?></div>
                <div class="<?php if($item['required']){ echo 'required'; } ?>">
                    <?php if ($item['value']) { ?>
                        <?php
                        if ($item['value']){
                            $values = explode ("\n",$item['value']);
                            foreach($values as $items){
                                $elements = explode (" : ",$items);
                                $quantity = count($elements);

                                if ($quantity == 1){
                                    ?>
                                        <input
                                                name="<?php echo $item['technical_field_name']; ?>"
                                                value="<?php echo str_replace('(!)','',$elements[0]); ?>"
                                                id="<?php echo str_replace('(!)','',$elements[0]); ?>"
                                                class="<?php echo $item['type_field']; ?> <?php if($item['required']){ echo 'required'; } ?> "
                                                type="radio"
                                            <?php
                                            $selected = stripos($elements[0], '(!)');
                                            if ($selected !== false){
                                                ?> checked <?php
                                            } ?>
                                        >
                                        <label for="<?php echo str_replace('(!)','',$elements[0]); ?>"><?php echo str_replace('(!)','',$elements[0]); ?></label>
                                    <?php
                                }elseif($quantity == 2){
                                    ?>
                                        <input
                                                name="<?php echo $item['technical_field_name']; ?>"
                                                value="<?php echo $elements[0]; ?>"
                                                id="<?php echo $elements[0]; ?>"
                                                class="<?php echo $item['type_field']; ?> <?php if($item['required']){ echo 'required'; } ?>"
                                                type="radio"
                                            <?php
                                            $selected = stripos($elements[1], '(!)');
                                            if ($selected !== false){
                                                ?> checked <?php
                                            } ?>
                                        >
                                        <label for="<?php echo $elements[0]; ?>"><?php echo str_replace('(!)','',$elements[1]); ?></label>
                                    <?php

                                }else{
                                    echo('ERROR!');
                                }
                            }
                        }
                        ?>
                    <?php } ?>
                </div>
            </div>

        <?php } elseif ($item['type_field'] == 'textarea'){ ?>

            <div class="input_wrap input_wrap_<?php echo $item['technical_field_name']; ?>">
                <?php if ($item['label']) { ?>
                    <label for="input_<?php echo $contact_id; ?>_<?php echo $item['technical_field_name']; ?>"><?php echo $item['label']; ?></label>
                <?php } ?>
                <textarea
                        id="input_<?php echo $contact_id; ?>_<?php echo $item['technical_field_name']; ?>"
                        name="<?php echo $item['technical_field_name']; ?>"
                        placeholder="<?php echo $item['placeholder']; ?>"
                        class="<?php echo $item['type_field']; ?> <?php if($item['required']){ echo 'required'; } ?>"
                ></textarea>
            </div>

        <?php } else { ?>

            <div class="textarea_wrap input_wrap_<?php echo $item['technical_field_name']; ?>">
                <?php if ($item['label']) { ?>
                    <label for="input_<?php echo $contact_id; ?>_<?php echo $item['technical_field_name']; ?>"><?php echo $item['label']; ?></label>
                <?php } ?>
                
                <input
                        id="input_<?php echo $contact_id; ?>_<?php echo $item['technical_field_name']; ?>"
                        name="<?php echo $item['technical_field_name']; ?>"
                        placeholder="<?php echo $item['placeholder']; ?>"
                        class="<?php echo $item['type_field']; ?> <?php if($item['required']){ echo 'required'; } ?>"
                        type="text"
                />
            </div>
        <?php }  ?>
    <?php } ?>
    
    <div class="input_wrap input_wrap_submit">
        <input class="contact_form_send" type="submit" value="<?php the_field('text_on_the_send_button',$contact_id); ?>" />
    </div>

    <div aria-busy="true" aria-label="Loading" role="progressbar" class="container_any">
        <div class="swing">
            <div class="swing-l"></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div class="swing-r"></div>
        </div>
        <div class="shadow">
            <div class="shadow-l"></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div class="shadow-r"></div>
        </div>
    </div>

    <div class="message_ok">
        <span><?php the_field('message_ok',$contact_id); ?></span>
    </div>

</form>