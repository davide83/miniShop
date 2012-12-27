<?php

$_lang['ms.action'] = 'Azione snippet per miniShop. Questa è la modalità di come lo snippet lavora.';
$_lang['ms.tplCartOuter'] = 'Chunk della tabella carrello';
$_lang['ms.tplCartRow'] = 'Una riga della tabella carrello';
$_lang['ms.tplDeliveryRow'] = 'Chunk di un metodo di consegna';
$_lang['ms.tplPaymentRow'] = 'Chunk di un metodo di pagamento';
$_lang['ms.tplAddrForm'] = 'Chunk del modulo d\'ordine';
$_lang['ms.tplOrderEmailUser'] = 'Email al cliente';
$_lang['ms.tplOrderEmailManager'] = 'Email al manager';
$_lang['ms.tplOrderEmailRow'] = 'Un prodotto ordinato nell\'email';
$_lang['ms.tplSubmitOrderSuccess'] = 'Messaggio di successo dopo aver completato l\'ordine';
$_lang['ms.tplMyOrdersList'] = 'Chunk per visualizzare gli ordini dei clienti in privato';
$_lang['ms.tplPaymentForm'] = 'Chunk del modulo di pagamento';
$_lang['ms.tplMiniCart'] = 'Chunk del mini carrello';
$_lang['ms.debug'] = 'Attivare la visualizzazione degli errori?';
$_lang['ms.userGroups'] = 'Elenco separato da virgole dei gruppi esistenti per la registrazione dei nuovi clienti.';

$_lang['ms.id'] = 'Identificativo del prodotto';
$_lang['ms.tpl'] = 'Chunk per i risultati del template';
$_lang['ms.limit'] = 'Limite delle Query';
$_lang['ms.offset'] = 'Offset delle Query';
$_lang['ms.outputSeparator'] = 'Separatore dei risultati';
$_lang['ms.totalVar'] = 'Nome del placeholder col conteggio dei risultati';
$_lang['ms.sortby'] = 'Ordinamento';
$_lang['ms.sortdir'] = 'Verso dell\'ordinamento';
$_lang['ms.onlyImg'] = 'Visualizzare solo le immagini?';


$_lang['gr.tpl'] = 'Nome del chunk che funge da modello della risorsa. NOTA: se non specificato, le proprietà vengono esportate come output per ogni risorsa.';
$_lang['gr.tplOdd'] = 'Nome del chunk che funge da modello della risorsa per le risorse con un valore idx dispari (vedi proprietà idx).';
$_lang['gr.tplFirst'] = 'Nome del chunk che funge da modello della risorsa per la prima risorsa (vedi proprietà primo).';
$_lang['gr.tplLast'] = 'Nome del chunk che funge da modello della risorsa per l\'ultima risorsa (vedi proprietà ultimo).';
$_lang['gr.sortby'] = 'Un nome di campo per ordinare o un oggetto JSON di nomi di campo e sortdir per ogni campo, ad esempio, {"publishedon": "ASC", "createdon": "DESC"}. Il valore predefinito è publishedon.';
$_lang['gr.sortbyTVType'] = 'Un tipo opzionale per indicare come ordinare il valore di Template Variable.';
$_lang['gr.sortbyAlias'] = 'Alias per il campo di ​​query sortby. Valore predefinito per una stringa vuota.';
$_lang['gr.sortbyEscaped'] = 'Determina se il nome del campo specificato in sortby deve essere sfuggito. Valore predefinito 0.';
$_lang['gr.sortdir'] = 'Verso dell\'ordinamento. Valore predefinito DESC.';
$_lang['gr.sortdirTV'] = 'Verso dell\'ordinamento di una Template Variable. Valore predefinito DESC.';
$_lang['gr.limit'] = 'Limita il numero di risorse restituite. Valore predefinito 5.';
$_lang['gr.offset'] = 'Un offset di risorse restituite dai criteri da ignorare.';
$_lang['gr.tvFilters'] = 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimiter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.';
$_lang['gr.depth'] = 'Il valore intero che indica la profondità per la ricerca di risorse da ciascun genitore. Valore predefinito 10.';
$_lang['gr.parents'] = 'Facoltativo. Elenco delimitato da virgole degli identificativi che servono come genitori.';
$_lang['gr.includeContent'] = 'Indica se il contenuto di ogni risorsa deve essere restituito nei risultati. Valore predefinito false.';
$_lang['gr.includeTVs'] = 'Indica se i valori TemplateVar devono essere inclusi nelle proprietà disponibili per ogni modello di risorsa. Valore predefinito false.';
$_lang['gr.includeTVList'] = 'Limiti TV compresi quelli specificati come un elenco separato da virgole di nomi di TV. Valore predefinito vuoto.';
$_lang['gr.showHidden'] = 'Indica se il contenuto di ogni risorsa deve essere restituito nei risultati. Valore predefinito false.';
$_lang['gr.showUnpublished'] = 'Indica se le risorse non pubblicate devono essere visualizzate. Valore predefinito false.';
$_lang['gr.showDeleted'] = 'Indica se le risorse eliminate devono essere mostrate. Valore predefinito false.';
$_lang['gr.resources'] = 'Un elenco separato da virgole degli ID di risorsa da escludere o includere. ID con un - davanti significa escludere. Es: 123,-456 significa includi la risorsa 123 e escludi la risorsa 456.';
$_lang['gr.processTVs'] = 'Indica se i valori TemplateVar devono essere resi come farebbero sulla risorsa sintetizzata. Valore predefinito false.';
$_lang['gr.processTVList'] = 'Limiti elaborati TVs a quelli specificati come un elenco separato da virgole di nomi di TV; nota solo i TV inclusi sarà disponibili per l\'elaborazione se specificati. Valore predefinito vuoto.';
$_lang['gr.tvPrefix'] = 'Prefisso per le proprietà TemplateVar. Valore predefinito: tv.';
$_lang['gr.idx'] = 'È possibile definire gli idx iniziali delle risorse, è una proprietà che viene incrementata ad ogni risorsa quando viene eseguito il rendering.';
$_lang['gr.first'] = 'Definire l\'idx che rappresenta la prima risorsa (vedi tplFirst). Valore predefinito 1.';
$_lang['gr.last'] = 'Definire l\'idx che rappresenta l\'ultima risorsa (vedi tplLast). Valore predefinito il numero di risorse che sono riassunte + primo - 1';
$_lang['gr.toPlaceholder'] = 'Se impostato, assegna il risultato a questo placeholder invece di emettererlo direttamente.';
$_lang['gr.toSeparatePlaceholders'] = 'Se impostato, assegnerà OGNI risultato a un placeholder distinto denominato da questo parametro aggiunto un numero sequenziale (a partire da 0).';
$_lang['gr.debug'] = 'Se vero, invierà la query SQL al log di MODX. Valore predefinito false.';
$_lang['gr.where'] = 'Un\'espressione JSON di criteri per costruire una qualsiasi ulteriore clausola where, e.g. &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`';
$_lang['gr.dbCacheFlag'] = 'Determina la modalità di come i risultati vengono memorizzati nella cache se cache_db è attivato in MODX. 0|false = non mettere in cache i risultati; 1 =  imposta di risultati in base alle impostazioni della cache, qualsiasi altro valore intero = numero di secondi di cache dei risultati da impostare';
$_lang['gr.context'] = 'Un elenco delimitato da virgole di tasti contestuali per i risultati limitanti. Il valore predefinito è vuoto, cioè non limitare i risultati dal contesto.';

$_lang['ms.sortbyMS'] = 'Un nome di campo della tabella ModGoods per ordinare o un oggetto JSON di nomi di campo e sortdir per ogni campo, per esempio {"price:>":500,"remains:<":15}';


