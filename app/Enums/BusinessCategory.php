<?php

namespace App\Enums;

use App\Libs\Core\Enums\Enum;

class BusinessCategory extends Enum
{
    const VAREJO_MOVEIS_EQUIPAMENTOS_PECAS             = 1;
    const TRANSPORTES                                  = 2;
    const TELECOMUNICACOES                             = 3;
    const SUPERMERCADO                                 = 4;
    const SOFTWARE_TI                                  = 5;
    const SERVICOS_JURIDICOS                           = 6;
    const SERVICOS_FINANCEIROS                         = 7;
    const SERVICOS_DOMESTICOS_LIMPEZA_E_CONSERVACAO    = 8;
    const SERVICOS_AUTOMOTIVOS                         = 9;
    const SEGURANCA_E_VIGILANCIA                       = 10;
    const SEGURADORAS                                  = 11;
    const SAUDE_E_ESTETICA                             = 12;
    const ROUPAS_E_ACESSORIOS                          = 13;
    const RH                                           = 14;
    const RESTAURANTES_E_BARES                         = 15;
    const PETS                                         = 16;
    const ORGAOS_PUBLICOS                              = 17;
    const IND_QUIMICOS_PLASTICOS_MADEIRA_PAPEL_E_METAL = 18;
    const IND_PRODUTOS_ALIMENTICIOS                    = 19;
    const IND_MAQUINAS_E_EQUIPAMENTOS                  = 20;
    const IMOBILIARIAS_E_CONDOMINIOS                   = 21;
    const HOTEIS_TURISMO_E_AFINS                       = 22;
    const ENERGIA_E_COMBUSTIVEIS                       = 23;
    const EDUCACAO_E_TREINAMENTO                       = 24;
    const DIVERSAO_RECREACAO_E_EVENTOS                 = 25;
    const CONTABILIDADE                                = 26;
    const CONSTRUCAO                                   = 27;
    const COMUNICACAO_MARKETING                        = 28;
    const CEMITERIOS_E_FUNERARIAS                      = 29;
    const ASSOCIACOES_E_ONGS                           = 30;
    const IGREJAS                                      = 31;
    const ENTIDADES_RELIGIOSAS                         = 32;
    const AGRONEGOCIO                                  = 33;
    const OUTROS                                       = 34;

    protected static array $enums = [
        self::VAREJO_MOVEIS_EQUIPAMENTOS_PECAS             => 'Varejo Movéis/Equipamentos/Peças',
        self::TRANSPORTES                                  => 'Transportes',
        self::TELECOMUNICACOES                             => 'Telecomunicações',
        self::SUPERMERCADO                                 => 'Supermercado',
        self::SOFTWARE_TI                                  => 'Software/TI',
        self::SERVICOS_JURIDICOS                           => 'Serviços Jurídicos',
        self::SERVICOS_FINANCEIROS                         => 'Serviços Financeiros',
        self::SERVICOS_DOMESTICOS_LIMPEZA_E_CONSERVACAO    => 'Serviços Domésticos/Limpeza e Conservação',
        self::SERVICOS_AUTOMOTIVOS                         => 'Serviços Automotivos',
        self::SEGURANCA_E_VIGILANCIA                       => 'Segurança e Vigilância',
        self::SEGURADORAS                                  => 'Seguradoras',
        self::SAUDE_E_ESTETICA                             => 'Saúde e Estética',
        self::ROUPAS_E_ACESSORIOS                          => 'Roupas e Acessórios',
        self::RH                                           => 'RH',
        self::RESTAURANTES_E_BARES                         => 'Restaurantes e Bares',
        self::PETS                                         => 'Pets',
        self::ORGAOS_PUBLICOS                              => 'Orgãos Públicos',
        self::IND_QUIMICOS_PLASTICOS_MADEIRA_PAPEL_E_METAL => 'Ind Químicos/Plásticos/Madeira/Papel e Metal',
        self::IND_PRODUTOS_ALIMENTICIOS                    => 'Ind Produtos alimentícios',
        self::IND_MAQUINAS_E_EQUIPAMENTOS                  => 'Ind Máquinas e Equipamentos',
        self::IMOBILIARIAS_E_CONDOMINIOS                   => 'Imobiliárias e Condomínios',
        self::HOTEIS_TURISMO_E_AFINS                       => 'Hotéis/Turismo e afins',
        self::ENERGIA_E_COMBUSTIVEIS                       => 'Energia e Combustíveis',
        self::EDUCACAO_E_TREINAMENTO                       => 'Educação e Treinamento',
        self::DIVERSAO_RECREACAO_E_EVENTOS                 => 'Diversão/Recreação e Eventos',
        self::CONTABILIDADE                                => 'Contabilidade',
        self::CONSTRUCAO                                   => 'Construção',
        self::COMUNICACAO_MARKETING                        => 'Comunicação/Marketing',
        self::CEMITERIOS_E_FUNERARIAS                      => 'Cemitérios e Funerárias',
        self::ASSOCIACOES_E_ONGS                           => 'Associações e ONGs',
        self::IGREJAS                                      => 'Igrejas',
        self::ENTIDADES_RELIGIOSAS                         => 'Entidades religiosas',
        self::AGRONEGOCIO                                  => 'Agronegócio',
        self::OUTROS                                       => 'Outros',
    ];
}
