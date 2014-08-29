<?php

/**
 * Ushahidi Platform Admin Update Post Repository
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Platform
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

namespace Ushahidi\Usecase\Post;

interface UpdatePostRepository
{
	/**
	 * @param  String $slug
	 * @return Boolean
	 */
	public function isSlugAvailable($slug);

	/**
	 * @param  Int $form_id
	 * @return Boolean
	 */
	public function doesFormExist($form_id);

	/**
	 * @param  String $locale
	 * @param  Int    $parent_id
	 * @param  String $type
	 * @return Boolean
	 */
	public function doesLocaleAlreadyExist($locale, $parent_id, $type);

	/**
	 * @param  Integer $id
	 * @param  Array   $update
	 * @return Post
	 */
	public function updatePost($id, Array $update);
}
