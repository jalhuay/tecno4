<?php
/********************************************************************
* Función getGCalendar (Eduardo Revilla Vaquero)                    *
* Genera url para la creación de un evento en google calendar.      *
*********************************************************************/

function getGCalendarUrl($event){ $titulo = urlencode($event['titulo']); $descripcion = urlencode($event['descripcion']); $localizacion = urlencode($event['localizacion']); $start=new DateTime($event['fecha_inicio'].' '.$event['hora_inicio'].' '.date_default_timezone_get()); $end=new DateTime($event['fecha_fin'].' '.$event['hora_fin'].' '.date_default_timezone_get()); $dates = urlencode($start->format("Ymd\THis")) . "/" . urlencode($end->format("Ymd\THis")); $name = urlencode($event['nombre']); $url = urlencode($event['url']); $gCalUrl = "http://www.google.com/calendar/event?action=TEMPLATE&amp;text=$titulo&amp;dates=$dates&amp;details=$descripcion&amp;location=$localizacion&amp;trp=false&amp;sprop=$url&amp;sprop=name:$name"; return ($gCalUrl); }
?>
