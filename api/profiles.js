const db = require('../lib/db')
const escape = require('sql-template-strings')

module.exports = async (req, res) => {
  const [profile] = await db.query(escape`
    SELECT *
    FROM t_livre
    WHERE idLivre = 1
  `)
  res.status(200).json({ profile });
}
