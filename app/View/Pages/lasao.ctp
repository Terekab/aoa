<?php 
    // Informamos el título
    $this->set('title_for_layout','La SAO');
    
    // Menu
    $this->start('menu');
    echo $this->element('/menu');
    $this->end();
?>

<style>
<!--
    p {
        text-align: justify;
    }
-->
</style>

<!-- Cuerpo -->
<div>
<fieldset>
    <legend><?php echo __("¿Qué es la Sociedad Albacetense de Ornitología?");?></legend>
    
    <div class="row-fluid">
    
        <div class="span9">
            
            <p><?php echo __("La Sociedad Albacetense de Ornitología es una asociación sin ánimo de lucro fundada en 1988, que lleva más de 25 años dedicada al estudio y defensa de las aves y sus hábitats. ");?></p>

            <p><?php echo __("Pretendemos conocer mejor a nuestras aves, sus relaciones con el entorno en el que viven y las alteraciones que en él se producen. Queremos divulgar este conocimiento como una forma más de acercamiento a la naturaleza. Con ello esperamos contribuir a una mejor preservación de nuestros ecosistemas. Conocer es conservar. Las aves pueden ser una buena escusa para acercarse un poco más a la naturaleza, pasear, escuchar y, en definitiva, sentirse un poco más parte de ella.");?></p>
            
            <p><?php echo __("Desde hace años, está creciendo el interés de la población por la conservación del medio ambiente. El estado de conservación de nuestro medio natural se ha venido deteriorando de forma continuada debido a actividades humanas de todo tipo: cambios agrícolas, usos del agua, construcción de grandes obras públicas, contaminación, etc.");?></p>
        
        </div>
        
        <div class="span3" style="text-align: center;">
            
            <?php echo $this->Html->image('/img/logos/logo_sao_180x179.png', array('alt'=>'Logotipo de la Sociedad Albacetense de Ornitología','title'=>'Logotipo de la Sociedad Albacetense de Ornitología')); ?>
            
        </div>
    
    </div>
    
        <p><?php echo __("Las aves, por su gran movilidad, se encuentran presentes en casi cualquier tipo de ambiente: desde las regiones árticas hasta el centro de las ciudades o la alta mar. Esto las hace valiosos indicadores de la salud ambiental de nuestro planeta. ");?></p>
    
    <div class="row-fluid">
    
        <div class="span3" style="text-align: center;">
        
            <img src="/img/Pages/fundadores.jpg" alt="Fundadores de la SAO" title="Socios fundadores de la SAO" 
                class="img-polaroid" style="margin-bottom: 20px;">
        
        </div>
        
        <div class="span9">
        
            <p><?php echo __("En estos 25 años se ha avanzado en materia de conservación, se han declarado las Zonas de Especial Protección para la Aves ZEPA, se han aprobado planes de recuperación de especies en peligro de extinción. Pero a los problemas de entonces: caza de acuáticas, venenos, tendidos eléctricos peligrosos, aún sin solucionar, hemos de añadirle otros nuevos: proliferación descontrolada de parques eólicos y fotovoltaicos sin la adecuada evaluación ambiental, apertura de nuevas canteras, legislación más permisiva en materia medioambiental, etc. ");?></p>
        
            <p><?php echo __("Por otra parte, el gran número de especies de aves que habitan en España, casi 400, su presencia en todos los medios y su facilidad de observación, son algunas de las razones que hacen de las aves objeto de estudio y observación de gran número de aficionados a la naturaleza.");?></p>
        
        </div>
    
    </div>
    
    <div class="row-fluid">
    
        <div class="span8">
    
            <p><?php echo __("La SAO, desde su fundación en el año 1988, realiza campañas, proyectos, estudios o actividades, entre otros:");?></p>
            
            <ul>
                <li><?php echo __("Realización de estudios sobre la distribución y ecología de las aves de Albacete, con la organización y participación en censos de aves provinciales y censos nacionales.");?></li>
                <li><?php echo __("Jornadas y Campañas de anillamiento científico de aves a nivel local y nacional, a través de los anilladores de la SAO, pertenecientes al Grupo Manchego de Anillamiento.");?></li>
                <li><?php echo __("Divulgación del conocimiento de las aves con actividades educativas celebrando el día mundial de las aves o de los humedales,  realizando exposiciones, etc.");?></li>
                <li><?php echo __("Recopilación de datos sobre aves poco frecuentes, accidentadas, nidos, mortandad de aves, etc.");?></li>
                <li><?php echo __("Publicación de un boletín de contacto entre los socios, de la revista “La Calandria” y de anuarios ornitológicos de la provincia de Albacete.");?></li>
                <li><?php echo __("Denuncia de atentados contra las aves y sus hábitats.");?></li>
                <li><?php echo __("Participación activa  en los procesos de evaluación de impacto ambiental. ");?></li>
                <li><?php echo __("Organización de excursiones, proyectos, proyección de diapositivas, charlas ornitológicas, cursos de ornitología, identificación de aves y anillamiento, etc.");?></li>
            </ul>
            
            <p><?php echo __("Y seguiremos en defensa de nuestras queridas aves y sus hábitats que en definitiva es la defensa del medio ambiente que es nuestra casa.")?></p>

            <p>
                <?php echo __("Para más información visita la página web de la");?>
                <a href="http://www.sao.albacete.org/">Sociedad Albacetense de Ornitología</a>
            </p>
            
        </div>
    
        <div class="span4" style="text-align: center;">
        
            <img src="/img/Pages/grupo_teles.jpg" alt="Socios durante una salida naturalista" title="Socios durante una salida naturalista" 
                class="img-polaroid" style="margin-bottom: 20px;">
        
        </div>
    
    </div>
</fieldset>
</div>

<!-- Pie -->
<?php
$this->start('pie');
echo $this->element('/pie');
$this->end();
?>