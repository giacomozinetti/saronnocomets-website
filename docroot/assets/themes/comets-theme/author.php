<?php
/**
 * The template for displaying Author Archive pages
 *
 * Methods for TimberHelper can be found in the /functions sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since    Timber 0.1
 */
global $wp_query;

$data = Timber::get_context();
$data['posts'] = Timber::get_posts();

$author = new TimberUser($wp_query->query_vars['author']);
$data['author'] = $author;
$data['title'] = 'Articoli scritti da ' . $author->name();

Timber::render(array('author.twig', 'archive.twig'), $data);
