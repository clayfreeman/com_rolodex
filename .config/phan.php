<?php declare(strict_types = 1);
/**
 * Phan configuration file used to certify the project's minimum PHP
 * version compatibility.
 *
 * @author     Clay Freeman <git@clayfreeman.com>
 * @copyright  2018 Clay Freeman. All rights reserved.
 * @license    GNU General Public License v3 (GPL-3.0).
 */

use \Phan\Issue;

// Return an array of configuration directives for Phan
return [
  'target_php_version'                                             => '7.2',
  'pretend_newer_core_functions_exist'                             => true,
  'allow_missing_properties'                                       => false,
  'null_casts_as_any_type'                                         => false,
  'null_casts_as_array'                                            => false,
  'array_casts_as_null'                                            => false,
  'strict_param_checking'                                          => true,
  'strict_property_checking'                                       => true,
  'strict_return_checking'                                         => true,
  'scalar_implicit_cast'                                           => false,
  'scalar_array_key_cast'                                          => false,
  'ignore_undeclared_variables_in_global_scope'                    => true,
  'backward_compatibility_checks'                                  => false,
  'check_docblock_signature_return_type_match'                     => true,
  'check_docblock_signature_param_type_match'                      => true,
  'prefer_narrowed_phpdoc_param_type'                              => true,
  'prefer_narrowed_phpdoc_return_type'                             => true,
  'analyze_signature_compatibility'                                => true,
  'allow_method_param_type_widening'                               => false,
  'guess_unknown_parameter_type_using_default'                     => false,
  'dead_code_detection'                                            => false,
  'unused_variable_detection'                                      => true,
  'force_tracking_references'                                      => false,
  'quick_mode'                                                     => false,
  'simplify_ast'                                                   => true,
  'enable_class_alias_support'                                     => true,
  'generic_types_enabled'                                          => true,
  'warn_about_undocumented_throw_statements'                       => true,
  'warn_about_undocumented_exceptions_thrown_by_invoked_functions' => true,
  'consistent_hashing_file_order'                                  => false,
  'skip_slow_php_options_warning'                                  => false,
  'ignore_undeclared_functions_with_known_signatures'              => false,
  'exclude_file_regex'                                             =>
    '|^joomla-cms/libraries/fof/|',
  'directory_list'                                                 => [
    'joomla-cms',
    'src'
  ],
  'exclude_analysis_directory_list'                                => [
    'joomla-cms'
  ],
  'plugins'                                                        => [
    'AlwaysReturnPlugin',
    'DollarDollarPlugin',
    'UnreachableCodePlugin',
    'DuplicateArrayKeyPlugin',
    'PregRegexCheckerPlugin',
    'PrintfCheckerPlugin'
  ],
  'suppress_issue_types'                                           => [
    'PhanRedefineClass'
  ]
];
