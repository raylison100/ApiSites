<?php

return [
   'queryPeople' => "SELECT a.nu_cns,b.nu_cns,a.nu_cpf_cidadao,b.nu_cpf,b.no_cidadao,b.no_mae,b.no_sexo,b.co_raca_cor,a.dt_nascimento,
                            a.co_dim_tempo,a.co_dim_cbo_1,c.no_cbo,a.co_dim_unidade_saude_1,d.no_unidade_saude,f.nu_ine,f.no_equipe,
                            a.co_dim_profissional_1,e.no_profissional,a.ds_filtro_cids,'k86' as codigo,'ciap' as tipo,d.nu_cnes,e.nu_cns

FROM tb_fat_atendimento_individual a,
     tb_cidadao b,
     tb_dim_cbo c,
     tb_dim_unidade_saude d,
     tb_dim_profissional e,
     tb_dim_equipe f

where a.nu_cns = b.nu_cns and
     (a.co_dim_tempo>='20200301' and a.co_dim_tempo<='20210231') and
      a.co_dim_unidade_saude_1 = d.co_seq_dim_unidade_saude and
      a.co_dim_equipe_1 = f.co_seq_dim_equipe and
      a.co_dim_cbo_1 = c.co_seq_dim_cbo and
      a.co_dim_profissional_1 = e.co_seq_dim_profissional and
      ds_filtro_ciaps LIKE '%K86%'"
];
