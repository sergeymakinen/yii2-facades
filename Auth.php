<?php

namespace sergeymakinen\facades;

/** @noinspection PhpUnnecessaryFullyQualifiedNameInspection */
/**
 * Auth facade.
 *
 * @method static boolean add($object) Adds a role, permission or rule to the RBAC system.
 * @method static boolean addChild($parent, $child) Adds an item as a child of another item.
 * @method static \yii\rbac\Assignment assign($role, string|integer $userId) Assigns a role to a user.
 * @method static boolean canAddChild(\yii\rbac\Item $parent, \yii\rbac\Item $child) Checks the possibility of adding a child to parent.
 * @method static boolean checkAccess(string|integer $userId, string $permissionName, array $params = []) Checks if the user has the specified permission.
 * @method static \yii\rbac\Permission createPermission(string $name) Creates a new Permission object.
 * @method static \yii\rbac\Role createRole(string $name) Creates a new Role object.
 * @method static null|\yii\rbac\Assignment getAssignment(string $roleName, string|integer $userId) Returns the assignment information regarding a role and a user.
 * @method static \yii\rbac\Assignment getAssignments(string|integer $userId) Returns all role assignment information for the specified user.
 * @method static \yii\rbac\Item getChildren(string $name) Returns the child permissions and/or roles.
 * @method static null|\yii\rbac\Permission getPermission(string $name) Returns the named permission.
 * @method static \yii\rbac\Permission getPermissions() Returns all permissions in the system.
 * @method static \yii\rbac\Permission getPermissionsByRole(string $roleName) Returns all permissions that the specified role represents.
 * @method static \yii\rbac\Permission getPermissionsByUser(string|integer $userId) Returns all permissions that the user has.
 * @method static null|\yii\rbac\Role getRole(string $name) Returns the named role.
 * @method static \yii\rbac\Role getRoles() Returns all roles in the system.
 * @method static \yii\rbac\Role getRolesByUser(string|integer $userId) Returns the roles that are assigned to the user via [[assign()]].
 * @method static null|\yii\rbac\Rule getRule(string $name) Returns the rule of the specified name.
 * @method static \yii\rbac\Rule getRules() Returns all rules available in the system.
 * @method static array getUserIdsByRole($roleName) Returns all user IDs assigned to the role specified.
 * @method static boolean hasChild($parent, $child) Returns a value indicating whether the child already exists for the parent.
 * @method static boolean remove($object) Removes a role, permission or rule from the RBAC system.
 * @method static removeAll() Removes all authorization data, including roles, permissions, rules, and assignments.
 * @method static removeAllAssignments() Removes all role assignments.
 * @method static removeAllPermissions() Removes all permissions.
 * @method static removeAllRoles() Removes all roles.
 * @method static removeAllRules() Removes all rules.
 * @method static boolean removeChild($parent, $child) Removes a child from its parent.
 * @method static boolean removeChildren($parent) Removed all children form their parent.
 * @method static boolean revoke($role, string|integer $userId) Revokes a role from a user.
 * @method static boolean revokeAll(mixed $userId) Revokes all roles from a user.
 * @method static boolean update(string $name, $object) Updates the specified role, permission or rule in the system.
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
