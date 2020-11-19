USE SECURITY3;

#3.1 new user
INSERT INTO SECURITY3.user_accounts VALUES (11, '349-449-1203', 'E.Temp');
#3.2 new a role
INSERT INTO SECURITY3.user_role (roleName, description) VALUES ('newRole', 'us stagg');
#3.3 create new table
INSERT INTO SECURITY3.DbTable VALUES ('newTable',4);
#3.4 add new privilege [in privilege superclass]
INSERT INTO SECURITY3.privileges VALUES (107,'reference');

#3.5 assign role to new account
UPDATE SECURITY3.user_role
SET userID = 11
WHERE userID = 808 AND roleName = 'newRole';

#3.6 assign role an account privilege
INSERT INTO SECURITY3.account_privileges VALUES (100,800,'newRole');
INSERT INTO SECURITY3.account_privileges VALUES (106,800,'newRole');

#3.7 assign new privilege [relatation privilege]
INSERT INTO SECURITY3.relation_privileges VALUES (106,801,4,'newRole','newTable');
INSERT INTO SECURITY3.relation_privileges VALUES (107,801,4,'newRole','newTable');

#3.8(a) retrieve privileges with a particular role
SELECT privType, roleName
FROM SECURITY3.privileges, SECURITY3.account_privileges
WHERE SECURITY3.account_privileges.pid = SECURITY3.privileges.pid AND SECURITY3.account_privileges.roleName='staff';

# VIEW which has all privileges for all roles
CREATE VIEW role_priv AS(
SELECT privType, roleName
FROM SECURITY3.privileges, SECURITY3.account_privileges
WHERE SECURITY3.account_privileges.pid = SECURITY3.privileges.pid);

#3.8(b) Retrieves privileges for each user-account
SELECT SECURITY3.user_accounts.userID, SECURITY3.user_accounts.userName,
       SECURITY3.user_role.roleName, SECURITY3.role_priv.privType
FROM SECURITY3.user_accounts, SECURITY3.user_role, SECURITY3.role_priv
WHERE SECURITY3.user_accounts.userID = SECURITY3.user_role.userID
      AND SECURITY3.user_accounts.userID =3
      AND SECURITY3.user_role.roleName = SECURITY3.role_priv.roleName;

# View to show privileges for each user account
CREATE VIEW all_user_priv
AS (
    SELECT SECURITY3.user_accounts.userID, SECURITY3.user_accounts.userName,
       SECURITY3.user_role.roleName, SECURITY3.role_priv.privType
        FROM SECURITY3.user_accounts, SECURITY3.user_role, SECURITY3.role_priv
            WHERE SECURITY3.user_accounts.userID = SECURITY3.user_role.userID
                AND SECURITY3.user_role.roleName = SECURITY3.role_priv.roleName
);

SELECT * FROM all_user_priv;

#3.8(c) Check for partitular privileges on particular user account
SELECT userName, privType
FROM all_user_priv
WHERE userID = 11 AND privType = 'create';

