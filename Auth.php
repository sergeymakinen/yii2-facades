<?php
/**
 * Facades for Yii 2
 *
 * @see       https://github.com/sergeymakinen/yii2-facades
 * @copyright Copyright (c) 2016 Sergey Makinen (https://makinen.ru)
 * @license   https://github.com/sergeymakinen/yii2-facades/blob/master/LICENSE The MIT License
 */

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Auth facade.
 *
 * Facades Yii::$app->get('auth') component.
 *
 * @see \yii\rbac\ManagerInterface
 * @method static bool add(\yii\rbac\Role|\yii\rbac\Permission|\yii\rbac\Rule $object) Adds a role, permission or rule to the RBAC system.
 * @method static bool addChild(\yii\rbac\Item $parent, \yii\rbac\Item $child) Adds an item as a child of another item.
 * @method static \yii\rbac\Assignment assign(\yii\rbac\Role $role, string|int $userId) Assigns a role to a user.
 * @method static bool canAddChild(\yii\rbac\Item $parent, \yii\rbac\Item $child) Checks the possibility of adding a child to parent.
 * @method static bool checkAccess(string|int $userId, string $permissionName, array $params = []) Checks if the user has the specified permission.
 * @method static \yii\rbac\Permission createPermission(string $name) Creates a new Permission object.
 * @method static \yii\rbac\Role createRole(string $name) Creates a new Role object.
 * @method static null|\yii\rbac\Assignment getAssignment(string $roleName, string|int $userId) Returns the assignment information regarding a role and a user.
 * @method static \yii\rbac\Assignment[] getAssignments(string|int $userId) Returns all role assignment information for the specified user.
 * @method static \yii\rbac\Item[] getChildren(string $name) Returns the child permissions and/or roles.
 * @method static null|\yii\rbac\Permission getPermission(string $name) Returns the named permission.
 * @method static \yii\rbac\Permission[] getPermissions() Returns all permissions in the system.
 * @method static \yii\rbac\Permission[] getPermissionsByRole(string $roleName) Returns all permissions that the specified role represents.
 * @method static \yii\rbac\Permission[] getPermissionsByUser(string|int $userId) Returns all permissions that the user has.
 * @method static null|\yii\rbac\Role getRole(string $name) Returns the named role.
 * @method static \yii\rbac\Role[] getRoles() Returns all roles in the system.
 * @method static \yii\rbac\Role[] getRolesByUser(string|int $userId) Returns the roles that are assigned to the user via [[assign()]].
 * @method static null|\yii\rbac\Rule getRule(string $name) Returns the rule of the specified name.
 * @method static \yii\rbac\Rule[] getRules() Returns all rules available in the system.
 * @method static array getUserIdsByRole(string $roleName) Returns all user IDs assigned to the role specified.
 * @method static bool hasChild(\yii\rbac\Item $parent, \yii\rbac\Item $child) Returns a value indicating whether the child already exists for the parent.
 * @method static bool remove(\yii\rbac\Role|\yii\rbac\Permission|\yii\rbac\Rule $object) Removes a role, permission or rule from the RBAC system.
 * @method static removeAll() Removes all authorization data, including roles, permissions, rules, and assignments.
 * @method static removeAllAssignments() Removes all role assignments.
 * @method static removeAllPermissions() Removes all permissions.
 * @method static removeAllRoles() Removes all roles.
 * @method static removeAllRules() Removes all rules.
 * @method static bool removeChild(\yii\rbac\Item $parent, \yii\rbac\Item $child) Removes a child from its parent.
 * @method static bool removeChildren(\yii\rbac\Item $parent) Removed all children form their parent.
 * @method static bool revoke(\yii\rbac\Role $role, string|int $userId) Revokes a role from a user.
 * @method static bool revokeAll(mixed $userId) Revokes all roles from a user.
 * @method static bool update(string $name, \yii\rbac\Role|\yii\rbac\Permission|\yii\rbac\Rule $object) Updates the specified role, permission or rule in the system.
 */
class Auth extends Facade
{
    /**
     * @inheritdoc
     */
    public static function getFacadeComponentId()
    {
        return 'auth';
    }
}
