//conta quantas noticias em cada mes
select n.not_mes as mes,  (SELECT COUNT(not_mes) 
FROM noticias where not_mes = n.not_mes) as qtd from noticias n  group by n.not_mes;

 
SELECT N.NOT_ID, N.NOT_DATE, N.NOT_TITULO, N.NOT_DIA, N.NOT_MES, N.NOT_ANO, N.NOT_DESCRICAO, NF.NFTO_URL, NF.NFTO_CAPTION, NF.NFTO_INFO, NF.NFTO_POS FROM NOTICIAS N LEFT JOIN NOTICIAS_FOTOS NF ON N.NOT_ID = NF.NOT_ID
WHERE N.NOT_VIEW='S' 
AND N.NOT_MES = 09 
AND NF.NFTO_POS='0' OR NF.NFTO_POS IS NULL ORDER BY N.NOT_DATE DESC LIMIT 0,3;

select distinct COUNT(not_id) as qtd_reg from noticias where NOT_MES =9

select   * from noticias_fotos
select   * from noticias



SELECT N.NOT_ID, N.NOT_DATE, N.NOT_TITULO, N.NOT_DIA, N.NOT_MES, N.NOT_ANO, N.NOT_DESCRICAO, NF.NFTO_URL 
FROM NOTICIAS N 
LEFT JOIN NOTICIAS_FOTOS NF ON N.NOT_ID = NF.NOT_ID 
WHERE N.NOT_VIEW='S' 
and  IFNULL(NF.NFTO_pos,0)=0
AND N.NOT_MES =09 ORDER BY N.NOT_DATE, N.NOT_TIME


DESC LIMIT 0,3;

SELECT n.not_id, n.not_date, n.not_titulo, n.not_dia, n.not_mes, n.not_ano, n.not_conteudo,
	nf.nfto_url
	from noticias n
	left join noticias_fotos nf on n.not_id = nf.not_id
	where n.not_view='s' and IFNULL(NF.NFTO_pos,0)=0 and n.not_id =11