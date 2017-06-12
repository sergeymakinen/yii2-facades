<?php
/**
 * Facades for Yii 2
 *
 * Generated on Yii 2.0.12
 *
 * @see       https://github.com/sergeymakinen/yii2-facades
 * @copyright Copyright (c) 2016-2017 Sergey Makinen (https://makinen.ru)
 * @license   https://github.com/sergeymakinen/yii2-facades/blob/master/LICENSE The MIT License
 */

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Yii::$app->get('auth') facade.
 *
 * Methods
 *
 * @method static bool add(\yii\rbac\Role|\yii\rbac\Permission|\yii\rbac\Rule $object) Adds a role, permission or rule to the RBAC system.
 * @see \yii\rbac\ManagerInterface::add
 *
 * @method static bool addChild(\yii\rbac\Item $parent, \yii\rbac\Item $child) Adds an item as a child of another item.
 * @see \yii\rbac\ManagerInterface::addChild
 *
 * @method static \yii\rbac\Assignment assign(\yii\rbac\Role $role, string|int $userId) Assigns a role to a user.
 * @see \yii\rbac\ManagerInterface::assign
 *
 * @method static bool canAddChild(\yii\rbac\Item $parent, \yii\rbac\Item $child) Checks the possibility of adding a child to parent.
 * @see \yii\rbac\ManagerInterface::canAddChild
 *
 * @method static bool checkAccess(string|int $userId, string $permissionName, array $params = []) Checks if the user has the specified permission.
 * @see \yii\rbac\CheckAccessInterface::checkAccess
 *
 * @method static \yii\rbac\Permission createPermission(string $name) Creates a new Permission object.
 * @see \yii\rbac\ManagerInterface::createPermission
 *
 * @method static \yii\rbac\Role createRole(string $name) Creates a new Role object.
 * @see \yii\rbac\ManagerInterface::createRole
 *
 * @method static null|\yii\rbac\Assignment getAssignment(string $roleName, string|int $userId) Returns the assignment information regarding a role and a user.
 * @see \yii\rbac\ManagerInterface::getAssignment
 *
 * @method static \yii\rbac\Assignment[] getAssignments(string|int $userId) Returns all role assignment information for the specified user.
 * @see \yii\rbac\ManagerInterface::getAssignments
 *
 * @method static \yii\rbac\Role[] getChildRoles(string $roleName) Returns child roles of the role specified.
 * @see \yii\rbac\ManagerInterface::getChildRoles
 *
 * @method static \yii\rbac\Item[] getChildren(string $name) Returns the child permissions and/or roles.
 * @see \yii\rbac\ManagerInterface::getChildren
 *
 * @method static null|\yii\rbac\Permission getPermission(string $name) Returns the named permission.
 * @see \yii\rbac\ManagerInterface::getPermission
 *
 * @method static \yii\rbac\Permission[] getPermissions() Returns all permissions in the system.
 * @see \yii\rbac\ManagerInterface::getPermissions
 *
 * @method static \yii\rbac\Permission[] getPermissionsByRole(string $roleName) Returns all permissions that the specified role represents.
 * @see \yii\rbac\ManagerInterface::getPermissionsByRole
 *
 * @method static \yii\rbac\Permission[] getPermissionsByUser(string|int $userId) Returns all permissions that the user has.
 * @see \yii\rbac\ManagerInterface::getPermissionsByUser
 *
 * @method static null|\yii\rbac\Role getRole(string $name) Returns the named role.
 * @see \yii\rbac\ManagerInterface::getRole
 *
 * @method static \yii\rbac\Role[] getRoles() Returns all roles in the system.
 * @see \yii\rbac\ManagerInterface::getRoles
 *
 * @method static \yii\rbac\Role[] getRolesByUser(string|int $userId) Returns the roles that are assigned to the user via [[assign()]].
 * @see \yii\rbac\ManagerInterface::getRolesByUser
 *
 * @method static null|\yii\rbac\Rule getRule(string $name) Returns the rule of the specified name.
 * @see \yii\rbac\ManagerInterface::getRule
 *
 * @method static \yii\rbac\Rule[] getRules() Returns all rules available in the system.
 * @see \yii\rbac\ManagerInterface::getRules
 *
 * @method static array getUserIdsByRole(string $roleName) Returns all user IDs assigned to the role specified.
 * @see \yii\rbac\ManagerInterface::getUserIdsByRole
 *
 * @method static bool hasChild(\yii\rbac\Item $parent, \yii\rbac\Item $child) Returns a value indicating whether the child already exists for the parent.
 * @see \yii\rbac\ManagerInterface::hasChild
 *
 * @method static bool remove(\yii\rbac\Role|\yii\rbac\Permission|\yii\rbac\Rule $object) Removes a role, permission or rule from the RBAC system.
 * @see \yii\rbac\ManagerInterface::remove
 *
 * @method static void removeAll() Removes all authorization data, including roles, permissions, rules, and assignments.
 * @see \yii\rbac\ManagerInterface::removeAll
 *
 * @method static void removeAllAssignments() Removes all role assignments.
 * @see \yii\rbac\ManagerInterface::removeAllAssignments
 *
 * @method static void removeAllPermissions() Removes all permissions.
 * @see \yii\rbac\ManagerInterface::removeAllPermissions
 *
 * @method static void removeAllRoles() Removes all roles.
 * @see \yii\rbac\ManagerInterface::removeAllRoles
 *
 * @method static void removeAllRules() Removes all rules.
 * @see \yii\rbac\ManagerInterface::removeAllRules
 *
 * @method static bool removeChild(\yii\rbac\Item $parent, \yii\rbac\Item $child) Removes a child from its parent.
 * @see \yii\rbac\ManagerInterface::removeChild
 *
 * @method static bool removeChildren(\yii\rbac\Item $parent) Removed all children form their parent.
 * @see \yii\rbac\ManagerInterface::removeChildren
 *
 * @method static bool revoke(\yii\rbac\Role $role, string|int $userId) Revokes a role from a user.
 * @see \yii\rbac\ManagerInterface::revoke
 *
 * @method static bool revokeAll(mixed $userId) Revokes all roles from a user.
 * @see \yii\rbac\ManagerInterface::revokeAll
 *
 * @method static bool update(string $name, \yii\rbac\Role|\yii\rbac\Permission|\yii\rbac\Rule $object) Updates the specified role, permission or rule in the system.
 * @see \yii\rbac\ManagerInterface::update
 */
class Auth extends Facade
{
    /**
     * @inheritDoc
     */
    public static function getFacadeComponentId()
    {
        return 'auth';
    }
}
